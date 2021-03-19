<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function post(Request $request)
    {
        $item=2;
        Log::debug($item);
        return response()->json(['auth'=>false],200);
    }
}
