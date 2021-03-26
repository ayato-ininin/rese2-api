<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Like;


class UsersController extends Controller
{
    public function get(Request $request)
    {
        if($request->has('email')){
            $items=User::where('email',$request->email)->first();       
            return response()->json([
                'message'=>'User got succesfully',
                'data'=>$items,
            ],200);
        }else{
            return response()->json([
                'status'=>'not found'
            ],404);
        }
    }
}
