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

Route::controller(PopupController::class)->group(function () {
    Route::get('admin/popups', 'index')->name("admin.popupIndex");
    Route::get('admin/popups/create', 'create')->name("admin.popupCreate");
    Route::post('admin/popups/store', 'store')->name("admin.popupStore");
    Route::patch('admin/popups/{popup}/edit', 'edit');
});

Route::controller(BannerController::class)->group(function () {
    Route::get('admin/banners', 'index')->name("admin.bannerIndex");
    Route::get('admin/banners/create', 'create')->name("admin.bannerCreate");
    Route::patch('admin/banners/{banner}/edit', 'edit');
});

Route::controller(YoutubeController::class)->group(function () {
    Route::get('admin/youtube', 'index')->name("admin.youtubeIndex");
    Route::get('admin/youtube/create', 'create')->name("admin.youtubeCreate");
    Route::patch('admin/youtube/{youtube}/edit', 'edit');
});

Route::controller(HistoryController::class)->group(function () {
    Route::get('admin/histories', 'index')->name("admin.historyIndex");
    Route::get('admin/histories/create', 'create')->name("admin.createCreate");
    Route::patch('admin/histories/{history}/edit', 'edit');
});

Route::controller(NoticeController::class)->group(function () {
    Route::get('admin/notices', 'index')->name("admin.noticeIndex");
    Route::get('admin/notices/create', 'create')->name("admin.noticeCreate");
    Route::patch('admin/notices/{notice}/edit', 'edit');
});

Route::controller(PatentController::class)->group(function () {
    Route::get('admin/patents', 'index')->name("admin.patentIndex");
    Route::get('admin/patents/create', 'create')->name("admin.patentCreate");
    Route::patch('admin/patents/{patent}/edit', 'edit');
});
