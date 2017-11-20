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

/*ここから　店舗毎に設定する*/
Route::get('/00000/start', function () {
    return view('start',['id' => '00000']);
});
Route::get('/00000/select', function () {
    return view('select',['id' => '00000']);
});
Route::get('/00000/input_credit', function () {
    return view('input_credit',['id' => '00000',
                                'store' => '店舗A',
                                'clientip' => '00387'
    ]);
});
Route::get('/00000/input_bitcoin', function () {
    return view('input_bitcoin',['id' => '00000',
                                'store' => '店舗A'
    ]);
});
/*ここまで　店舗毎に設定する*/


/*ここから　テレコムさん対応*/
Route::get('/99999/t_start', function () {
    return view('t_start',['id' => '99999']);
});
Route::get('/99999/t_select', function () {
    return view('t_select',['id' => '99999']);
});
Route::get('/99999/t_input_credit', function () {
    return view('t_input_credit',['id' => '99999',
                                'store' => 'fuuticket',
                                'clientip' => '00387'
    ]);
});
Route::controller('/{id}/t_conform_credit','Controller_t_conform_credit');
/*ここまで　テレコムさん対応*/


Route::controller('/{id}/conform_credit','Controller_conform_credit');
Route::controller('/{id}/conform_bitcoin','Controller_conform_bitcoin');
Route::controller('/{id}/zaif_post','Controller_zaif_post');
Route::controller('/{id}/zaif_result','Controller_zaif_result');
Route::controller('/telecom_settlment_result','Controller_telecom_settlment_result');
Route::controller('/fuuticket_kiyaku','Controller_fuuticket_kiyaku');




/*
Route::post('/00000/conform_credit', function () {
    return view('conform_credit',['id' => '00000']);
});

Route::post('/00000/zaif_post', function () {
    return view('zaif_post',['id' => '00000']);
});
*/
