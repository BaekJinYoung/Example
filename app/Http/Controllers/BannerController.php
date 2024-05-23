<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function __construct(Banner $banner){
        $this->Banner = $banner;
    }

    public function index(){
        $banners = $this->Banner->orderBy('order', 'desc')->get();
        return view('admin.bannerIndex', compact('banners'));
    }

    public function move(Banner $banner, $direction){
        if($direction == 'up'){
            $previousBanner = Banner::where('order', '>', $banner->order)->orderBy('order', 'asc')->first();
        } elseif ($direction == 'down') {
            $previousBanner = Banner::where('order', '<', $banner->order)->orderBy('order', 'desc')->first();
        }

        if ($previousBanner) {
            $tempOrder = $banner->order;
            $banner->order = $previousBanner->order;
            $previousBanner->order = $tempOrder;

            $banner->save();
            $previousBanner->save();
        }

        return redirect()->back();
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
            'title' => $store['title'],
            'mobile_title' => $store['mobile_title'],
            'subtitle' => $store['subtitle'],
            'mobile_subtitle' => $store['mobile_subtitle'],
            'details' => $store['details'],
            'mobile_details' => $store['mobile_details'],
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
        $update = $request->validate([
            'title' => 'required',
            'mobile_title' => 'required',
            'subtitle' => 'required',
            'mobile_subtitle' => 'required',
            'details' => 'required',
            'mobile_details' => 'required',
            'image' => 'nullable',
            'mobile_image' => 'nullable',
        ]);

        $path = $banner->image;
        $mobile_path = $banner->mobile_image;

        if($request->hasFile('image')) {
            if ($banner->image) {
                Storage::disk('public')->delete($banner->image);
            }
            $fileName = time().'_'.$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $fileName, 'public');
        }

        if($request->hasFile('mobile_image')) {
            if ($banner->mobile_image) {
                Storage::disk('public')->delete($banner->mobile_image);
            }
            $mobile_fileName = time().'_'.$request->file('mobile_image')->getClientOriginalName();
            $mobile_path = $request->file('mobile_image')->storeAs('images', $mobile_fileName, 'public');
        }

        $banner->update([
            'title' => $update['title'],
            'mobile_title' => $update['mobile_title'],
            'subtitle' => $update['subtitle'],
            'mobile_subtitle' => $update['mobile_subtitle'],
            'details' => $update['details'],
            'mobile_details' => $update['mobile_details'],
            'image' => $path,
            'mobile_image' => $mobile_path,
        ]);

        return redirect()->route('admin.bannerIndex');
    }

    public function delete(Banner $banner){
        $banner->delete();
        return redirect()->route('admin.bannerIndex');
    }
}
