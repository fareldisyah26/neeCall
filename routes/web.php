<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {

    // Route Man
    Route::get('/man', function () {
        return view('layouts.man');
    });

    Route::get('/man/beach', function () {
        return view('pages.pages_man.beach');
    });

    Route::get('/man/winter', function () {
        return view('pages.pages_man.winter');
    });

    Route::get('/man/summer', function () {
        return view('pages.pages_man.summer');
    });

    Route::get('/man/college', function () {
        return view('pages.pages_man.college');
    });

    // Route Woman
    Route::get('/woman', function () {
        return view('layouts.woman');
    });

    Route::get('/woman/beach', function () {
        return view('pages.pages_woman.beach');
    });

    Route::get('/woman/winter', function () {
        return view('pages.pages_woman.winter');
    });

    Route::get('/woman/summer', function () {
        return view('pages.pages_woman.summer');
    });

    Route::get('/woman/college', function () {
        return view('pages.pages_woman.college');
    });

    // Route Kids
    Route::get('/kids', function () {
        return view('layouts.kids');
    });

    Route::get('/kids/beach', function () {
        return view('pages.pages_kids.beach');
    });

    Route::get('/kids/winter', function () {
        return view('pages.pages_kids.winter');
    });

    Route::get('/kids/summer', function () {
        return view('pages.pages_kids.summer');
    });

    Route::get('/kids/college', function () {
        return view('pages.pages_kids.college');
    });

    // Route Trends
    Route::get('/trends', function () {
        return view('layouts.trends');
    });

    // Route Collection
    Route::get('/collection', function () {
        return view('layouts.collection');
    });
});
