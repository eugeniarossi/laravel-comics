<?php

use Illuminate\Support\Facades\Route;

/* ROUTE HOME */
Route::get('/home', function () {
    
    $data = [
        'logo' => "Vite::asset('/resources/images/dc-logo.png')",
        'navLinks' => ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'],
        'comics' => config('db.comics'),
        'mainNavLinks' => [
            [
                'src' => '/images/buy-comics-digital-comics.png',
                'name' => 'digital comics'
            ], [
                'src' => '/images/buy-comics-merchandise.png',
                'name' => 'dc merchandise'
            ], [
                'src' => '/images/buy-comics-subscriptions.png',
                'name' => 'subscription'
            ], [
                'src' => '/images/buy-comics-shop-locator.png',
                'name' => 'comic shop locator'
            ], [
                'src' => '/images/buy-dc-power-visa.svg',
                'name' => 'dc power visa'
            ]
        ]
    ];

    return view('home', $data);
})->name('home');
/* /ROUTE HOME */

/* ROUTE PRODUCT */
Route::get('/product/{index}', function($index) {

    $comics = config('db.comics');         

    if ($index > count($comics) - 1) {
        abort(404);
    }

    $data = [
        'logo' => "Vite::asset('/resources/images/dc-logo.png')",
        'navLinks' => ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'],
        'comic' => $comics[$index],
        'mainNavLinks' => [
            [
                'src' => '/images/buy-comics-digital-comics.png',
                'name' => 'digital comics'
            ], [
                'src' => '/images/buy-comics-merchandise.png',
                'name' => 'dc merchandise'
            ], [
                'src' => '/images/buy-comics-subscriptions.png',
                'name' => 'subscription'
            ], [
                'src' => '/images/buy-comics-shop-locator.png',
                'name' => 'comic shop locator'
            ], [
                'src' => '/images/buy-dc-power-visa.svg',
                'name' => 'dc power visa'
            ]
        ]
    ];
    return view('product', $data);
})->name('product')->where('index', '[0-9]+');
/* ROUTE PRODUCT */