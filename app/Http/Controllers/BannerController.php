<?php

namespace App\Http\Controllers;

use App\Http\Requests\BannerRequest;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function __construct(Banner $banner)
    {
        $this->Banner = $banner;
    }

    public function index(Request $request)
    {
        $banners = $this->Banner->where('language', app()->getLocale())->orderBy('order', 'desc')->get();
        return view('admin.bannerIndex', compact('banners'));
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('admin.popupUpload'), $fileName);
        }

        if ($request->hasFile('mobile_image')) {
            $mobile_image = $request->file('mobile_image');
            $mobile_fileName = time() . '_' . $mobile_image->getClientOriginalName();
            $mobile_image->move(public_path('admin.popupUpload'), $mobile_fileName);
        }

        return back();
    }

    public function move(Banner $banner, $direction)
    {
        if ($direction == 'up') {
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

    public function store(BannerRequest $request)
    {
        $store = $request->validated();

        $fileName = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', time() . '_' . $fileName, 'public');
        $store['image'] = $path;
        $store['image_name'] = $fileName;

        $mobile_fileName = $request->file('mobile_image')->getClientOriginalName();
        $mobile_path = $request->file('mobile_image')->storeAs('images', time() . '_' . $mobile_fileName, 'public');
        $store['mobile_image'] = $mobile_path;
        $store['mobile_image_name'] = $mobile_fileName;

        $store['language'] = app()->getLocale();

        $this->Banner->create($store);

        if ($request->filled('continue')) {
            return redirect()->route('admin.bannerCreate');
        }

        return redirect()->route('admin.bannerIndex');
    }

    public function create()
    {
        return view('admin.bannerCreate');
    }

    public function edit($id)
    {
        $banner = Banner::withTrashed()->find($id);

        if (!$banner || $banner->trashed()) {
            return redirect()->route('admin.bannerIndex');
        }

        return view('admin.bannerEdit', compact('banner'));
    }

    public function update(BannerRequest $request, Banner $banner)
    {
        $update = $request->validated();

        if ($request->hasFile('image')) {
            if ($banner->image) {
                Storage::disk('public')->delete($banner->image);
            }
            $fileName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', time() . '_' . $fileName, 'public');
            $update['image'] = $path;
            $update['image_name'] = $fileName;
        }

        if ($request->hasFile('mobile_image')) {
            if ($banner->mobile_image) {
                Storage::disk('public')->delete($banner->mobile_image);
            }
            $mobile_fileName = $request->file('mobile_image')->getClientOriginalName();
            $mobile_path = $request->file('mobile_image')->storeAs('images', time() . '_' . $mobile_fileName, 'public');
            $update['mobile_image'] = $mobile_path;
            $update['mobile_image_name'] = $mobile_fileName;
        }

        $banner->update($update);

        return redirect()->route('admin.bannerIndex');
    }

    public function delete(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('admin.bannerIndex');
    }
}
