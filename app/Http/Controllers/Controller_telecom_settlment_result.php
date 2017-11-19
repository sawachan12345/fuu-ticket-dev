<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use Illuminate\Routing\Controller;
*/
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Controller_telecom_settlment_result extends Controller
{
    public function postIndex(Request $request)
    {
        return view('telecom_settlment_result');
    }
    public function getIndex(Request $request)
    {
        return view('telecom_settlment_result');
    }
}
?>
