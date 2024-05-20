<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function __construct(Banner $banner){
        $this->Banner = $banner;
    }

    public function index(){
        $banners = $this->Banner->latest()->paginate(10);
        return view('admin.bannerIndex', compact('banners'));
    }

    public function create(){
        return view('admin.bannerCreate');
    }

    public function edit(){
        return view('admin.bannerEdit');
    }
}
