<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use Illuminate\Routing\Controller;
*/
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Controller_inputted_select extends Controller
{
    public function postIndex(Request $request)
    {
        $id = $request->input('id');
        $amount = $request->input('amount');
        $cust_mail = $request->input('cust_mail');
        $merchantName = $request->input('merchantName');
        $clientip = $request->input('clientip');
        return view('inputted_select', ['id' => $id,
                                      'cust_mail' => $cust_mail,
                                      'merchantName' => $merchantName,
                                      'amount' => $amount,
                                      'clientip' => $clientip
      ]);
    }
}
?>
