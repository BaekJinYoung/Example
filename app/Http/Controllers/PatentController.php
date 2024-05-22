<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patent;

class PatentController extends Controller
{
    public function __construct(Patent $patent){
        $this->Patent = $patent;
    }

    public function index(Request $request){
        $perPage = $request->input('per_page', 8);
        $patents = $this->Patent->latest()->paginate($perPage);
        return view('admin.patentIndex', compact('patents'));
    }

    public function create(){
        return view('admin.patentCreate');
    }

    public function store(Request $request){
        $store = $request->validate([
            'title' => 'required',
            'image' => 'nullable',
            'number' => 'required',
            'continue' => 'nullable'
        ]);

        $fileName = time().'_'.$request -> file('image') -> getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');

        $this->Patent->create([
            'title' => $store['title'],
            'image' => $path,
            'number' => $store['number'],
        ]);

        if($request->has('continue')){
            return redirect()->route('admin.patentCreate');
        }

        return redirect()->route('admin.patentIndex');
    }

    public function edit(Patent $patent){
        return view('admin.patentEdit', compact('patent'));
    }

    public function update(Request $request, Patent $patent){
        $update = $request->validate([
            'title' => 'required',
            'image' => 'nullable',
            'number' => 'required'
        ]);

        $fileName = time().'_'.$request -> file('image') -> getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');

        $this->Patent->update([
            'title' => $update['title'],
            'image' => $path,
            'number' => $update['number'],
        ]);

        return redirect()->route('admin.patentIndex');
    }

    public function delete(Patent $patent){
        $patent->delete();
        return redirect()->route('admin.patentIndex');
    }
}
