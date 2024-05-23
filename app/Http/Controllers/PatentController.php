<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patent;
use Illuminate\Support\Facades\Storage;

class PatentController extends Controller
{
    public function __construct(Patent $patent)
    {
        $this->Patent = $patent;
    }

    public function index(Request $request)
    {
        $query = Patent::query();

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('title', 'like', '%' . $searchTerm . '%');
        }

        $patents = $query->orderBy('order', 'desc')->get();

        return view('admin.patentIndex', compact('patents'));
    }

    public function move(Patent $patent, $direction)
    {
        if ($direction == 'left') {
            $previousPatent = Patent::where('order', '>', $patent->order)->orderBy('order', 'asc')->first();
        } elseif ($direction == 'right') {
            $previousPatent = Patent::where('order', '<', $patent->order)->orderBy('order', 'desc')->first();
        }

        if ($previousPatent) {
            $tempOrder = $patent->order;
            $patent->order = $previousPatent->order;
            $previousPatent->order = $tempOrder;

            $patent->save();
            $previousPatent->save();
        }

        return redirect()->back();
    }

    public function create()
    {
        return view('admin.patentCreate');
    }

    public function store(Request $request)
    {
        $store = $request->validate([
            'title' => 'required',
            'image' => 'nullable',
            'number' => 'required',
            'continue' => 'nullable'
        ]);

        $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');

        $this->Patent->create([
            'title' => $store['title'],
            'image' => $path,
            'number' => $store['number'],
        ]);

        if ($request->has('continue')) {
            return redirect()->route('admin.patentCreate');
        }

        return redirect()->route('admin.patentIndex');
    }

    public function edit(Patent $patent)
    {
        return view('admin.patentEdit', compact('patent'));
    }

    public function update(Request $request, Patent $patent)
    {
        $update = $request->validate([
            'title' => 'required',
            'image' => 'nullable',
            'number' => 'required'
        ]);

        if ($request->hasFile('image')) {
            if ($patent->image) {
                Storage::disk('public')->delete($patent->image);
            }
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $fileName, 'public');
            $update['image'] = $path;
        }


        $patent->update($update);

        return redirect()->route('admin.patentIndex');
    }

    public function delete(Patent $patent)
    {
        $patent->delete();
        return redirect()->route('admin.patentIndex');
    }
}
