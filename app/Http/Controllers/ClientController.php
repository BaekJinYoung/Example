<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\History;
use App\Models\Popup;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ClientController extends Controller
{
    public function index(){
        $locale = session('locale', 'ko');

        $banners = Banner::orderby('order', 'desc')->get();
        $histories = History::orderBy('date', 'asc')->get();
        $historiesByYear = $histories->groupBy(function ($date) {
            return Carbon::parse($date->date)->format('Y');
        })->sortKeysDesc();
        $popups = Popup::orderby('order', 'desc')->get();
        if($locale == 'en'){
            return view('eng.index', compact('banners', 'historiesByYear', 'popups'));
        } else {
            return view('client.index', compact('banners', 'historiesByYear', 'popups'));
        }
    }

    public function about()
    {
        $locale = session('locale', 'ko');

        if($locale == 'en'){
            return view('eng.about');
        } else {
            return view('client.about');
        }
    }

    public function greeting()
    {
        $locale = session('locale', 'ko');

        if($locale == 'en'){
            return view('eng.greeting');
        } else {
            return view('client.greeting');
        }
    }

    public function contact()
    {
        $locale = session('locale', 'ko');

        if($locale == 'en'){
            return view('eng.contact');
        } else {
            return view('client.contact');
        }
    }

    public function nova_vision()
    {
        $locale = session('locale', 'ko');

        if($locale == 'en'){
            return view('eng.nova_vision');
        } else {
            return view('client.nova_vision');
        }
    }

    public function nova_finder()
    {
        $locale = session('locale', 'ko');

        if($locale == 'en'){
            return view('eng.nova_finder');
        } else {
            return view('client.nova_finder');
        }
    }

    public function RnD_1()
    {
        $locale = session('locale', 'ko');

        if($locale == 'en'){
            return view('eng.RnD_1');
        } else {
            return view('client.RnD_1');
        }
    }

    public function RnD_2()
    {
        $locale = session('locale', 'ko');

        if($locale == 'en'){
            return view('eng.RnD_2');
        } else {
            return view('client.RnD_2');
        }
    }

    public function RnD_3()
    {
        $locale = session('locale', 'ko');

        if($locale == 'en'){
            return view('eng.RnD_3');
        } else {
            return view('client.RnD_3');
        }
    }
}
