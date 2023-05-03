<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
Route::get('/product', function () {
    
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

    return view('product', $data);
})->name('product');
/* /ROUTE PRODUCT */