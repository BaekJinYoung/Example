<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\History;
use App\Models\Notice;
use App\Models\Patent;
use App\Models\Popup;
use App\Models\Youtube;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ClientController extends Controller
{
    public function index()
    {
        $banners = Banner::where('language', app()->getLocale())->orderby('order', 'desc')->get();

        $histories = History::where('language', app()->getLocale())
            ->where('main', '1')
            ->orderBy('date', 'asc')
            ->get();
        $historiesByYearAndMonth  = $histories->groupBy(function ($date) {
            return Carbon::parse($date->date)->format('Y');
        })->map(function ($yearGroup) {
        return $yearGroup->groupBy(function ($date) {
            return Carbon::parse($date->date)->format('m');
        });
        })->sortKeysDesc();

        $popups = Popup::where('language', app()->getLocale())->orderby('order', 'desc')->get();

        $youtubes = Youtube::where('language', app()->getLocale())->get()->map(function ($youtube) {
            $youtube->video_id = $this->extractYouTubeId($youtube->link);
            return $youtube;
        });

        if (app()->getLocale() == 'en') {
            return view('eng.index', compact('banners', 'historiesByYearAndMonth', 'popups', 'youtubes'));
        } else {
            return view('client.index', compact('banners', 'historiesByYearAndMonth', 'popups', 'youtubes'));
        }
    }

    private function extractYouTubeId($url)
    {
        preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
        return $matches[1] ?? null;
    }

    public function about()
    {
        $histories = History::where('language', app()->getLocale())->orderBy('date', 'asc')->get();
        $historiesByYearAndMonth  = $histories->groupBy(function ($date) {
            return Carbon::parse($date->date)->format('Y');
        })->map(function ($yearGroup) {
            return $yearGroup->groupBy(function ($date) {
                return Carbon::parse($date->date)->format('m');
            });
        })->sortKeysDesc();

        if (app()->getLocale() == 'en') {
            return view('eng.about', compact('historiesByYearAndMonth', 'histories'));
        } else {
            return view('client.about', compact('historiesByYearAndMonth', 'histories'));
        }
    }

    public function greeting()
    {
        if (app()->getLocale() == 'en') {
            return view('eng.greeting');
        } else {
            return view('client.greeting');
        }
    }

    public function contact()
    {
        if (app()->getLocale() == 'en') {
            return view('eng.contact');
        } else {
            return view('client.contact');
        }
    }

    public function nova_vision()
    {
        if (app()->getLocale() == 'en') {
            return view('eng.nova_vision');
        } else {
            return view('client.nova_vision');
        }
    }

    public function nova_finder()
    {
        if (app()->getLocale() == 'en') {
            return view('eng.nova_finder');
        } else {
            return view('client.nova_finder');
        }
    }

    public function RnD_1()
    {
        if (app()->getLocale() == 'en') {
            return view('eng.RnD_1');
        } else {
            return view('client.RnD_1');
        }
    }

    public function RnD_2()
    {
        $notices = Notice::where('language', app()->getLocale())->orderby('created_at', 'desc')->get();

        if (app()->getLocale() == 'en') {
            return view('eng.RnD_2', compact('notices'));
        } else {
            return view('client.RnD_2', compact('notices'));
        }
    }

    public function RnD_3()
    {
        $patents = Patent::where('language', app()->getLocale())->orderby('created_at', 'desc')->get();

        if (app()->getLocale() == 'en') {
            return view('eng.RnD_3', compact('patents'));
        } else {
            return view('client.RnD_3', compact('patents'));
        }
    }
}
