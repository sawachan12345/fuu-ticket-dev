<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Controller_Conform_bitcoin extends Controller
{
    public function postIndex(Request $request)
    {
        $amount = $request->input('amount');
        $buyerId = $request->input('buyerId');
        $merchantName = $request->input('merchantName');
        return view('conform_bitcoin', ['id' => $id,
                                        'amount' => $amount,
                                        'buyerId' => $buyerId,
                                        'merchantName' => $merchantName
      ]);
    }
}
?>
