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

    public function store(Request $request){
        $store = $request->validate([
            'title' => 'required',
            'mobile_title' => 'required',
            'subtitle' => 'required',
            'mobile_subtitle' => 'required',
            'details' => 'required',
            'mobile_details' => 'required',
            'image' => 'required',
            'mobile_image' => 'required',
        ]);

        $this->Banner->create($store);

        if($request->has('continue')){
            return redirect()->route('admin.bannerCreate');
        }

        return redirect()->route('admin.bannerIndex');
    }

    public function edit(Banner $banner){
        return view('admin.bannerEdit', compact('banner'));
    }

    public function update(Request $request, Banner $banner){
        $request = $request->validate([
            'title' => 'required',
            'mobile_title' => 'required',
            'subtitle' => 'required',
            'mobile_subtitle' => 'required',
            'details' => 'required',
            'mobile_details' => 'required',
            'image' => 'required',
            'mobile_image' => 'required',
        ]);
        $banner->update($request);
        return redirect()->route('admin.bannerIndex');
    }

    public function delete(Banner $banner){
        $banner->delete();
        return redirect()->route('admin.bannerIndex');
    }
}
