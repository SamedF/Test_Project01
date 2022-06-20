<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('Listings', [
        'heading' => 'Latest Listings',
        'listings' => [
        [
            'id' => 1,
            'title' => 'listing 1',
            'description' => 'lorem ipsum ..'
        ],
        [
            'id' => 2,
            'title' => 'listing 2',
            'description' => 'lorem ipsum ..'
        ]
    ]
    ]);
});
