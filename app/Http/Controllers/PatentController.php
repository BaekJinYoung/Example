<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patent;

class PatentController extends Controller
{
    public function __construct(Patent $patent){
        $this->Patent = $patent;
    }

    public function index(){
        $patents = $this->Patent->latest()->paginate(10);;
        return view('admin.patentIndex', compact('patents'));
    }

    public function create(){
        return view('admin.patentCreate');
    }

    public function store(Request $request){
        $request = $request->validate([
            'title' => 'required',
            'image' => 'nullable',
            'number' => 'required',
        ]);

        $this->Patent->create($request);

        return redirect()->route('admin.patentIndex');
    }

    public function edit(Patent $patent){
        return view('admin.patentEdit', compact('patent'));
    }

    public function update(Request $request, Patent $patent){
        $request = $request->validate([
            'title' => 'required',
            'image' => 'nullable',
            'number' => 'required'
        ]);
        $patent->update($request);
        return redirect()->route('admin.patentIndex');
    }
}
