<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Like;
use App\Models\User;

class LikesController extends Controller
{
      public function getLikeShops(Request $request){
        $user=User::find($request->user_id);
        return response()->json(
            ['data'=>$user->getShopsFromLikes],200
        );
        
    }
         public function post(Request $request)
    {
        $now = Carbon::now();
        $param=new Like;
        $param->user_id=$request->user_id;
        $param->shop_id=$request->shop_id;
        $param->created_at=$now;
        $param->updated_at=$now;
        $param->save();
        return response()->json([
            'message'=>'like successfully',
            'data'=>$param
        ],200);
    }
       public function delete(Like $like, Request $request)
    {
        $id=$like->id;
        $item=Like::where('shop_id',$request->shop_id)->where('user_id',$request->user_id)->delete();
         if ($item) {
            return response()->json(
                ['message' => 'Like deleted successfully'],
                200
            );
        } else {
            return response()->json(
                ['message' => 'not found'],
                404
            );
    }
}



}
