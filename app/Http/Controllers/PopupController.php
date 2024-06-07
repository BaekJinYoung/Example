<?php

namespace App\Http\Controllers;

use App\Http\Requests\PopupRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\Popup;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PopupController extends Controller
{
    public function __construct(Popup $popup)
    {
        $this->Popup = $popup;
    }

    public function index()
    {
        $popups = $this->Popup->where('language', app()->getLocale())->orderBy('order', 'desc')->get();

        return view('admin.popupIndex', compact('popups'));
    }

    public function move(Popup $popup, $direction)
    {
        if ($direction == 'left') {
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

    public function create()
    {
        return view('admin.popupCreate');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('admin.popupUpload'), $fileName);
        }

        return back();
    }

    public function store(PopupRequest $request)
    {
        $store = $request->validated();

        $fileName = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', time() . '_' . $fileName, 'public');
        $store['image'] = $path;
        $store['image_name'] = $fileName;

        $store['language'] = app()->getLocale();

        $this->Popup->create($store);

        if ($request->filled('continue')) {
            return redirect()->route('admin.popupCreate');
        }

        return redirect()->route('admin.popupIndex');
    }

    public function edit($id)
    {
        $popup = Popup::withTrashed()->find($id);

        if (!$popup || $popup->trashed()) {
            return redirect()->route('admin.popupIndex');
        }

        return view('admin.popupEdit', compact('popup'));
    }

    public function update(PopupRequest $request, Popup $popup)
    {
        $update = $request->validated();

        if ($request->hasFile('image')) {
            if ($popup->image) {
                Storage::disk('public')->delete($popup->image);
            }
            $fileName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', time() . '_' . $fileName, 'public');
            $update['image'] = $path;
            $update['image_name'] = $fileName;
        }

        $popup->update($update);

        return redirect()->route('admin.popupIndex');
    }

    public function delete(Popup $popup)
    {
        $popup->delete();
        return redirect()->route('admin.popupIndex');
    }
}
