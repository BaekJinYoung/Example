<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PatentController;
use App\Http\Controllers\PopupController;
use App\Http\Controllers\YoutubeController;
use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware([LocaleMiddleware::class])->group(function () {
    Route::name('client.')->group(function () {
        Route::controller(ClientController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/company/about', 'about')->name('about');
            Route::get('/company/greeting', 'greeting')->name('greeting');
            Route::get('/md/ability', 'RnD_1')->name('RnD_1');
            Route::get('/md/thesis', 'RnD_2')->name('RnD_2');
            Route::get('/md/certification', 'RnD_3')->name('RnD_3');
            Route::get('/contact', 'contact')->name('contact');
            Route::get('/products/vision', 'nova_vision')->name('nova_vision');
            Route::get('/products/finder', 'nova_finder')->name('nova_finder');
        });

        Route::prefix('lang')->group(function () {
            Route::controller(LanguageController::class)->group(function () {
                Route::get('/ko', 'setKorean')->name('lang.ko');
                Route::get('/en', 'setEnglish')->name('lang.en');
            });
        });
    });

    Route::name('admin.')->group(function () {
        Route::prefix('admin')->group(function () {
            Route::prefix('popups')->group(function () {
                Route::controller(PopupController::class)->group(function () {
                    Route::get('/', 'index')->name("popupIndex");
                    Route::get('/create', 'create')->name("popupCreate");
                    Route::post('/store', 'store')->name("popupStore");
                    Route::get('/{popup}/edit', 'edit')->name("popupEdit");
                    Route::patch('/{popup}', 'update')->name("popupUpdate");
                    Route::delete('/{popup}', 'delete')->name("popupDelete");
                    Route::post('/{popup}/move/{direction}', 'move')->name("popupMove");
                    Route::post('/{popup}/create', 'upload')->name("popupUpload");
                });
            });

            Route::prefix('banners')->group(function () {
                Route::controller(BannerController::class)->group(function () {
                    Route::get('/', 'index')->name("bannerIndex");
                    Route::get('/create', 'create')->name("bannerCreate");
                    Route::post('/store', 'store')->name("bannerStore");
                    Route::get('/{banner}/edit', 'edit')->name("bannerEdit");
                    Route::patch('/{banner}', 'update')->name("bannerUpdate");
                    Route::delete('/{banner}', 'delete')->name("bannerDelete");
                    Route::post('/{banner}/move/{direction}', 'move')->name("bannerMove");
                });
            });

            Route::prefix('youtube')->group(function () {
                Route::controller(YoutubeController::class)->group(function () {
                    Route::get('/', 'index')->name("youtubeIndex");
                    Route::get('/create', 'create')->name("youtubeCreate");
                    Route::post('/store', 'store')->name("youtubeStore");
                    Route::get('/{youtube}/edit', 'edit')->name("youtubeEdit");
                    Route::patch('/{youtube}', 'update')->name("youtubeUpdate");
                    Route::delete('/{youtube}', 'delete')->name("youtubeDelete");
                });
            });

            Route::prefix('histories')->group(function () {
                Route::controller(HistoryController::class)->group(function () {
                    Route::get('/', 'index')->name("historyIndex");
                    Route::get('/create', 'create')->name("historyCreate");
                    Route::post('/store', 'store')->name("historyStore");
                    Route::get('/{history}/edit', 'edit')->name("historyEdit");
                    Route::patch('/{history}', 'update')->name("historyUpdate");
                    Route::delete('/{history}', 'delete')->name("historyDelete");
                });
            });

            Route::prefix('notices')->group(function () {
                Route::controller(NoticeController::class)->group(function () {
                    Route::get('/', 'index')->name("noticeIndex");
                    Route::get('/create', 'create')->name("noticeCreate");
                    Route::post('/store', 'store')->name("noticeStore");
                    Route::get('/{notice}/edit', 'edit')->name("noticeEdit");
                    Route::patch('/{notice}', 'update')->name("noticeUpdate");
                    Route::delete('/{notice}', 'delete')->name("noticeDelete");
                });
            });

            Route::prefix('patents')->group(function () {
                Route::controller(PatentController::class)->group(function () {
                    Route::get('/', 'index')->name("patentIndex");
                    Route::get('/create', 'create')->name("patentCreate");
                    Route::post('/store', 'store')->name("patentStore");
                    Route::get('/{patent}/edit', 'edit')->name("patentEdit");
                    Route::patch('/{patent}', 'update')->name("patentUpdate");
                    Route::delete('/{patent}', 'delete')->name("patentDelete");
                    Route::post('/{patent}/move/{direction}', 'move')->name("patentMove");
                });
            });
        });
    });
});


