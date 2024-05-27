<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    // 한국어로 설정
    public function setKorean(Request $request)
    {
        $request->session()->put('locale', 'ko');
        return redirect()->back();
    }

    // 영어로 설정
    public function setEnglish(Request $request)
    {
        $request->session()->put('locale', 'en');
        return redirect()->back();
    }
}
