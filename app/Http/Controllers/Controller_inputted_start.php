<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use Illuminate\Routing\Controller;
*/
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Controller_inputted_start extends Controller
{
    public function postIndex(Request $request)
    {
        $id = $request->input('id');
        $cust_name = $request->input('cust_name');
        $cust_tel = $request->input('cust_tel');
        $cust_mail = $request->input('cust_mail');
        $date = $request->input('date');
        $starttime = $request->input('starttime');
        $endtime = $request->input('endtime');
        $designatd = $request->input('designatd');
        $course = $request->input('course');
        $place = $request->input('place');
        $address = $request->input('address');
        $merchantName = $request->input('merchantName');
        $storemail = $request->input('storemail');
        $clientip = $request->input('clientip');
        return view('inputted_start', ['id' => $id,
                                      'cust_name' => $cust_name,
                                      'cust_tel' => $cust_tel,
                                      'cust_mail' => $cust_mail,
                                      'date' => $date,
                                      'starttime' => $starttime,
                                      'endtime' => $endtime,
                                      'designatd' => $designatd,
                                      'course' => $course,
                                      'place' => $place,
                                      'address' => $address,
                                      'merchantName' => $merchantName,
                                      'storemail' => $storemail,
                                      'clientip' => $clientip
      ]);
    }
}
?>
