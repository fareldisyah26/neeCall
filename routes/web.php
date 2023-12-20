<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

    // Route Hospital
    Route::get('/hospital', function () {
        return view('layouts.hospital');
    });

    Route::get('/hospital/bayu_asih', function () {
        return view('pages.pages_hospital.bayu_asih');
    });
    Route::get('/hospital/amira', function () {
        return view('pages.pages_hospital.amira');
    });
    Route::get('/hospital/rama_hadi', function () {
        return view('pages.pages_hospital.rama_hadi');
    });
    Route::get('/hospital/radjak', function () {
        return view('pages.pages_hospital.radjak');
    });

    //Route FireFighter
    Route::get('/firefighter', function () {
        return view('layouts.firefighter');
    });
    Route::get('/firefighter/pemadam', function () {
        return view('pages.pages_firefighter.pemadam');
    });

    //Route Police
    Route::get('/police', function () {
        return view('layouts.police');
    });
    Route::get('/police/polres_pwk', function () {
        return view('pages.pages_police.polres_pwk');
    });
    Route::get('/police/polsek_campaka', function () {
        return view('pages.pages_police.polsek_campaka');
    });
    Route::get('/police/polsek_cibatu', function () {
        return view('pages.pages_police.polsek_cibatu');
    });
    Route::get('/police/polsek_pwk', function () {
        return view('pages.pages_police.polsek_pwk');
    });

    //Route More
    Route::get('/more', function () {
        return view('layouts.more');
    });
