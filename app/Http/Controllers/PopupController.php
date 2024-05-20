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

    public function edit(){
        return view('admin.popupEdit');
    }
}
