<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function setKorean(Request $request)
    {
        $boardType = $request->route('boardType');
        $request->session()->put('locale', 'ko');

        switch ($boardType) {
            case 'popup':
                return redirect()->route("admin.popupIndex");
            case 'banner':
                return redirect()->route("admin.bannerIndex");
            case 'youtube':
                return redirect()->route("admin.youtubeIndex");
            case 'history':
                return redirect()->route("admin.historyIndex");
            case 'notice':
                return redirect()->route("admin.noticeIndex");
            case 'patent':
                return redirect()->route("admin.patentIndex");
            default:
                return redirect()->back();
        }
    }

    public function setEnglish(Request $request)
    {
        $boardType = $request->route('boardType');
        $request->session()->put('locale', 'en');

        switch ($boardType) {
            case 'popup':
                return redirect()->route("admin.popupIndex");
            case 'banner':
                return redirect()->route("admin.bannerIndex");
            case 'youtube':
                return redirect()->route("admin.youtubeIndex");
            case 'history':
                return redirect()->route("admin.historyIndex");
            case 'notice':
                return redirect()->route("admin.noticeIndex");
            case 'patent':
                return redirect()->route("admin.patentIndex");
            default:
                return redirect()->back();
        }
    }
}
