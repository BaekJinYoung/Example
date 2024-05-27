<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\History;
use App\Models\Popup;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $banners = Banner::orderby('order', 'desc')->get();
        $histories = History::orderBy('date', 'asc')->get();
        $historiesByYear = $histories->groupBy(function ($date) {
            return Carbon::parse($date->date)->format('Y');
        })->sortKeysDesc();
        $popups = Popup::orderby('order', 'desc')->get();
        return view('client.index', compact('banners', 'historiesByYear', 'popups'));
    }

    public function about()
    {
        return view('client.about');
    }

    public function greeting()
    {
        return view('client.greeting');
    }

    public function contact()
    {
        return view('client.contact');
    }

    public function nova_vision()
    {
        return view('client.nova_vision');
    }

    public function nova_finder()
    {
        return view('client.nova_finder');
    }

    public function RnD_1()
    {
        return view('client.RnD_1');
    }

    public function RnD_2()
    {
        return view('client.RnD_2');
    }

    public function RnD_3()
    {
        return view('client.RnD_3');
    }
}
