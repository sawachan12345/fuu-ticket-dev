<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/00000/start', function () {
    return view('start',['id' => '00000']);
});

Route::get('/00000/select', function () {
    return view('select',['id' => '00000']);
});

Route::get('/00000/input_credit', function () {
    return view('input_credit',['id' => '00000',
                                'store' => '店舗A'
    ]);
});
Route::get('/00000/input_bitcoin', function () {
    return view('input_bitcoin',['id' => '00000',
                                'store' => '店舗A'
    ]);
});

Route::controller('/{id}/conform_bitcoin', 'Controller_Conform_bitcoin');

/*
Route::post('/00000/conform_credit', function () {
    return view('conform_credit',['id' => '00000']);
});

Route::post('/00000/zaif_post', function () {
    return view('zaif_post',['id' => '00000']);
});
*/
