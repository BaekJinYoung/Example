<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Popup;

class PopupController extends Controller
{
    public function __construct(Popup $popup){
        $this->Popup = $popup;
    }

    public function index(){
        $popups = $this->Popup->latest()->paginate(10);;
        return view('admin.popupIndex', compact('popups'));
    }

    public function create(){
        return view('admin.popupCreate');
    }

    public function store(Request $request){
        $store = $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link' => 'nullable'
        ]);

        $fileName = time().'_'.$request -> file('image') -> getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');

        $this->Popup->create([
            'title' => $store['title'],
            'image' => $path,
            'link' => $store['link'],
        ]);

        if($request->has('continue')){
            return redirect()->route('admin.popupCreate');
        }

        return redirect()->route('admin.popupIndex');
    }

    public function edit(Popup $popup){
        return view('admin.popupEdit', compact('popup'));
    }

    public function update(Request $request, Popup $popup){
        $update = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'link' => 'nullable'
        ]);

        $fileName = time().'_'.$request -> file('image') -> getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');

        $this->Popup->update([
            'title' => $update['title'],
            'image' => $path,
            'link' => $update['link'],
        ]);

        return redirect()->route('admin.popupIndex');
    }

    public function delete(Popup $popup){
        $popup->delete();
        return redirect()->route('admin.popupIndex');
    }
}
