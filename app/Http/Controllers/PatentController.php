<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatentRequest;
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
        $query = $this->Patent->query();
        $search = $request->input('search', '');

        if (!empty($search)) {
            $query->where('title', 'like', '%' . $search . '%');
        }

        $perPage = $request->query('perPage', 8);
        $patents = $query->where('language', app()->getLocale())->orderBy('order', 'desc')->paginate($perPage);

        return view('admin.patentIndex', compact('patents', 'perPage', 'search'));
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

    public function store(PatentRequest $request)
    {
        //dd($request);
        $store = $request->validated();

        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', time() . '_' . $fileName, 'public');
            $store['image'] = $path;
            $store['image_name'] = $fileName;
        } else {
            $store['image'] = null;
            $store['image_name'] = null;
        }

        $store['language'] = app()->getLocale();

        $this->Patent->create($store);

        if ($request->filled('continue')) {
            return redirect()->route('admin.patentCreate');
        }

        return redirect()->route('admin.patentIndex');
    }

    public function edit(Patent $patent)
    {
        return view('admin.patentEdit', compact('patent'));
    }

    public function update(PatentRequest $request, Patent $patent)
    {
        $update = $request->validated();

        if ($request->remove_image == 1) {
            if ($patent->image) {
                Storage::delete('public/images/' . $patent->image);
            }
            $update['image'] = '';
            $update['image_name'] = '';
        } elseif ($request->hasFile('image')) {
            if ($patent->image) {
                Storage::delete('public/images/' . $patent->image);
            }
            $fileName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', time() . '_' . $fileName, 'public');
            $update['image'] = $path;
            $update['image_name'] = $fileName;
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
