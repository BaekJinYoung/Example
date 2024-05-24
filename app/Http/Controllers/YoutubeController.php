<?php

namespace App\Http\Controllers;

use App\Models\Youtube;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    public function __construct(Youtube $youtube)
    {
        $this->Youtube = $youtube;
    }

    public function index()
    {
        $youtubes = $this->Youtube->all()->map(function ($youtube) {
            $youtube->video_id = $this->extractYouTubeId($youtube->link);
            return $youtube;
        });

        return view('admin.youtubeIndex', compact('youtubes'));
    }

    private function extractYouTubeId($url)
    {
        preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
        return $matches[1] ?? null;
    }

    public function create()
    {
        return view('admin.youtubeCreate');
    }

    public function store(Request $request)
    {
        $request = $request->validate(['link' => 'required',]);

        $this->Youtube->create($request);

        return redirect()->route('admin.youtubeIndex');
    }

    public function edit(Youtube $youtube)
    {
        return view('admin.youtubeEdit', compact('youtube'));
    }

    public function update(Request $request, Youtube $youtube)
    {
        $request = $request->validate(['link' => 'required']);
        $youtube->update($request);
        return redirect()->route('admin.youtubeIndex');
    }

    public function delete(Youtube $youtube)
    {
        $youtube->delete();
        return redirect()->route('admin.youtubeIndex');
    }
}
