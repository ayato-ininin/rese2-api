<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Like;

class LikesController extends Controller
{
    public function index()
    {
        $item=Like::all();
        return response()->json([
            'message'=>'succesfully',
            'data'=>$item
        ],200);
    }
     public function store(Request $request)
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
    public function show(Like $like)
    {
        // $item=Like::where('user_id',$like->id)->first();
        // if($item){
        //     return response()->json([
        //         'message'=>'like succesfully',
        //         'data'=>$item
        //     ],200);
        // }else{
        //     return response()->json([
        //         'message'=>'not found'
        //     ],404);
        // }
    }
     public function destroy(Like $like, Request $request)
    {
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
