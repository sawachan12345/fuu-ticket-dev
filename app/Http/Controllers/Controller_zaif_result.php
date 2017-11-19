<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use Illuminate\Routing\Controller;
*/
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Controller_zaif_result extends Controller
{
    public function postIndex(Request $request)
    {
        $invoiceId = $request->input('invoiceId');
        $settled = $request->input('settled');
        $amount = $request->input('amount');
        $btc = $request->input('btc');
        $address = $request->input('address');
        $buyerId = $request->input('buyerId');
        return view('zaif_result', [
                                        'invoiceId' => $invoiceId,
                                        'settled' => $settled,
                                        'amount' => $amount,
                                        'btc' => $btc,
                                        'address' => $address,
                                        'buyerId' => $buyerId
      ]);
    }
}
?>
