<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use Illuminate\Routing\Controller;
*/
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Controller_conform_credit extends Controller
{
    public function postIndex(Request $request)
    {
        $money = $request->input('money');
        $clientip = $request->input('clientip');
        $id = $request->input('id');
        return view('conform_credit', [
                                        'clientip' => $clientip,
                                        'sendid' => $id,
                                        'money' => $money
      ]);
    }
}
?>
