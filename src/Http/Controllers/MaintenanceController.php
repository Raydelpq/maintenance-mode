<?php

namespace Raydelpq\MaintenanceMode\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class MaintenanceController extends Controller
{
    public function enable(Request $request)
    {
        //if(!$this->checkTokent($request->token))
        //    return response()->json(['message' => 'Unauthorized'], 401);

        Artisan::call('up');
        return Redirect::back()->with('status', 'The application is now in maintenance mode.');
    }

    public function disable(Request $request)
    {
        //if(!$this->checkTokent($request->token))
        //    return response()->json(['message' => 'Unauthorized'], 401);

        Artisan::call('down');
        return Redirect::back()->with('status', 'The application is now live.');
    }

    private function checkTokent($request_token){
        $tokent = date("YMD")."30342";
        if($request_token != $tokent)
            return false;

        return true;
    }
}
