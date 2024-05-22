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

        $fileName = time().'_'.$request -> file('image') -> getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $mobile_fileName = time().'_'.$request -> file('mobile_image') -> getClientOriginalName();
        $mobile_path = $request->file('mobile_image')->storeAs('images', $mobile_fileName, 'public');

        $this->Banner->create([
            'title' => 'required',
            'mobile_title' => 'required',
            'subtitle' => 'required',
            'mobile_subtitle' => 'required',
            'details' => 'required',
            'mobile_details' => 'required',
            'image' => $path,
            'mobile_image' => $mobile_path,
        ]);

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
