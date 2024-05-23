<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Popup;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PopupController extends Controller
{
    public function __construct(Popup $popup){
        $this->Popup = $popup;
    }

    public function index(){
        $popups = $this->Popup->orderBy('order', 'desc')->get();
        return view('admin.popupIndex', compact('popups'));
    }

    public function move(Popup $popup, $direction){
        if($direction == 'left'){
            $previousPopup = Popup::where('order', '>', $popup->order)->orderBy('order', 'asc')->first();
        } elseif ($direction == 'right') {
            $previousPopup = Popup::where('order', '<', $popup->order)->orderBy('order', 'desc')->first();
        }

        if ($previousPopup) {
            $tempOrder = $popup->order;
            $popup->order = $previousPopup->order;
            $previousPopup->order = $tempOrder;

            $popup->save();
            $previousPopup->save();
        }

        return redirect()->back();
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
            'image' => 'nullable',
            'link' => 'nullable'
        ]);

        if($request->hasFile('image')) {
            if ($popup->image) {
                Storage::disk('public')->delete($popup->image);
            }
            $fileName = time().'_'.$request -> file('image') -> getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $fileName, 'public');
            $update['image'] = $path;
        }

        Log::info('Popup update data: ', $update);
        $popup->update($update);;

        return redirect()->route('admin.popupIndex');
    }

    public function delete(Popup $popup){
        $popup->delete();
        return redirect()->route('admin.popupIndex');
    }
}
