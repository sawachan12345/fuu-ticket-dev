<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use Illuminate\Routing\Controller;
*/
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Controller_fuuticket_kiyaku extends Controller
{
    public function getIndex(Request $request)
    {
        return view('fuuticket_kiyaku');
    }
}
?>
