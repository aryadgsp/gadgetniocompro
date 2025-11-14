<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::prefix('partner')->group(function () {
    Route::get('/ugreen', function () {
        return view('partner.ugreen');
    })->name('partner.ugreen');

    Route::get('/lenovo', function () {
        return view('partner.lenovo');
    })->name('partner.lenovo');

    Route::get('/vention', function () {
        return view('partner.vention');
    })->name('partner.vention');

    Route::get('/aqua', function () {
        return view('partner.aqua');
    })->name('partner.aqua');

    Route::get('/baseus', function () {
        return view('partner.baseus');
    })->name('partner.baseus');

    Route::get('/bodimax', function () {
        return view('partner.bodimax');
    })->name('partner.bodimax');

    Route::get('/deerma', function () {
        return view('partner.deerma');
    })->name('partner.deerma');
});
