<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class Controller_zaif_post extends Controller
{
    public function postIndex(Request $request)
    {
        $amount = $request->input('amount');
        $buyerId = $request->input('buyerId');
        $merchantName = $request->input('merchantName');
        $id = $request->input('id');
/*
        Mail::send('emails.paystart', [
                                        'amount' => $amount,
                                        'buyerId' => $buyerId,
                                        'merchantName' => $merchantName,
                                        'id' => $id
                                      ], function ($m) {
            $m->to('naonao.nao640@gmail.com')->subject('ビットコイン決済開始通知');
        });
*/
        return view('zaif_post', [
                                        'amount' => $amount,
                                        'buyerId' => $buyerId,
                                        'merchantName' => $merchantName,
                                        'id' => $id
      ]);
    }
}
?>
