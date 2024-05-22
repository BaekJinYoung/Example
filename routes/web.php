<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PatentController;
use App\Http\Controllers\PopupController;
use App\Http\Controllers\YoutubeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [ClientController::class, 'index']);

Route::controller(LoginController::class)->group(function () {
    Route::get('admin', 'index')->name('login');
    Route::post('admin', 'login');
});

Route::controller(PopupController::class)->group(function () {
    Route::get('admin/popups', 'index')->name("admin.popupIndex");
    Route::get('admin/popups/create', 'create')->name("admin.popupCreate");
    Route::post('admin/popups/store', 'store')->name("admin.popupStore");
    Route::get('admin/popups/{popup}/edit', 'edit')->name("admin.popupEdit");
    Route::patch('admin/popups/{popup}', 'update')->name("admin.popupUpdate");
    Route::delete('admin/popups/{popup}', 'delete')->name("admin.popupDelete");
});

Route::controller(BannerController::class)->group(function () {
    Route::get('admin/banners', 'index')->name("admin.bannerIndex");
    Route::get('admin/banners/create', 'create')->name("admin.bannerCreate");
    Route::post('admin/banners/store', 'store')->name("admin.bannerStore");
    Route::get('admin/banners/{banner}/edit', 'edit')->name("admin.bannerEdit");
    Route::patch('admin/banners/{banner}', 'update')->name("admin.bannerUpdate");
    Route::delete('admin/banners/{banner}', 'delete')->name("admin.bannerDelete");
});

Route::controller(YoutubeController::class)->group(function () {
    Route::get('admin/youtube', 'index')->name("admin.youtubeIndex");
    Route::get('admin/youtube/create', 'create')->name("admin.youtubeCreate");
    Route::post('admin/youtube/store', 'store')->name("admin.youtubeStore");
    Route::get('admin/youtube/{youtube}/edit', 'edit')->name("admin.youtubeEdit");
    Route::patch('admin/youtube/{youtube}', 'update')->name("admin.youtubeUpdate");
    Route::delete('admin/youtube/{youtube}', 'delete')->name("admin.youtubeDelete");
});

Route::controller(HistoryController::class)->group(function () {
    Route::get('admin/histories', 'index')->name("admin.historyIndex");
    Route::get('admin/histories/create', 'create')->name("admin.historyCreate");
    Route::post('admin/histories/store', 'store')->name("admin.historyStore");
    Route::get('admin/histories/{history}/edit', 'edit')->name("admin.historyEdit");
});

Route::controller(NoticeController::class)->group(function () {
    Route::get('admin/notices', 'index')->name("admin.noticeIndex");
    Route::get('admin/notices/create', 'create')->name("admin.noticeCreate");
    Route::post('admin/notices/store', 'store')->name("admin.noticeStore");
    Route::get('admin/notices/{notice}/edit', 'edit')->name("admin.noticeEdit");
    Route::patch('admin/notices/{notice}', 'update')->name("admin.noticeUpdate");
    Route::delete('admin/notices/{notice}', 'delete')->name("admin.noticeDelete");
});

Route::controller(PatentController::class)->group(function () {
    Route::get('admin/patents', 'index')->name("admin.patentIndex");
    Route::get('admin/patents/create', 'create')->name("admin.patentCreate");
    Route::post('admin/patents/store', 'store')->name("admin.patentStore");
    Route::get('admin/patents/{patent}/edit', 'edit')->name("admin.patentEdit");
    Route::patch('admin/patents/{patent}', 'update')->name("admin.patentUpdate");
    Route::delete('admin/patents/{patent}', 'delete')->name("admin.patentDelete");
});
