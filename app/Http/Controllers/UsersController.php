<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Like;


class UsersController extends Controller
{
    public function post(Request $request)
    {
        if($request->has('email')){
            $items=User::where('email',$request->email)->first();
            // $content=User::find(1)->fromUserId();
            
            $content=Book::where('user_id',$items->id)->get();
            $likes=Like::where('user_id',$items->id)->get();
            return response()->json([
                'message'=>'User got succesfully',
                'data'=>$items,
                'likes'=>$likes,
                'content'=>$content
            ],200);
        }else{
            return response()->json([
                'status'=>'not found'
            ],404);
        }
    }
}
