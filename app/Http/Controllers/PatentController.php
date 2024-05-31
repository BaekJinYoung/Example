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
        $query = $this->Patent->query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('title', 'like', '%' . $search . '%');
        }

        $perPage = $request->query('perPage', 8);
        $patents = $query->where('language', app()->getLocale())->orderBy('order', 'desc')->paginate($perPage);

        return view('admin.patentIndex', compact('patents', 'perPage'));
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
        $this->middleware('auth');
        return view('admin.patentCreate');
    }

    public function store(Request $request)
    {
        $store = $request->validate(['title' => 'required', 'image' => 'nullable', 'number' => 'required', 'continue' => 'nullable']);

        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', time() . '_' . $fileName, 'public');

            $store['image'] = $path;
            $store['image_name'] = $fileName;
        } else {
            // 파일이 없는 경우 처리
            $store['image'] = null; // 또는 기본 값 설정
            $store['image_name'] = null; // 또는 기본 값 설정
        }

        $store['language'] = app()->getLocale();

        $this->Patent->create($store);

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
        $update = $request->validate(['title' => 'required', 'image' => 'nullable', 'number' => 'required']);

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
