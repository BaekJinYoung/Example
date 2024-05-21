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

        $this->Popup->create($store);

        if($request->has('continue')){
            return redirect()->route('admin.popupCreate');
        }

        return redirect()->route('admin.popupIndex');
    }

    public function edit(Popup $popup){
        return view('admin.popupEdit', compact('popup'));
    }

    public function update(Request $request, Popup $popup){
        $request = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'link' => 'nullable'
        ]);
        $popup->update($request);
        return redirect()->route('admin.popupIndex');
    }

    public function delete(Popup $popup){
        $popup->delete();
        return redirect()->route('admin.popupIndex');
    }
}
