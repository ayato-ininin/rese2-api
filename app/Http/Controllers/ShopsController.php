<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopsController extends Controller
{
    public function index()
    {
        $items=Shop::all();
        return response()->json([
            'message'=>'ok',
            'data'=>$items
        ],200);
    }
    public function store(Request $request)
    {
        $item=new Shop;
        $item->shopname=$request->shopname;
        $item->genre=$request->genre;
        $item->area=$request->area;
        $item->img_url=$request->img_url;
        $item->introduction=$request->introduction;
        $item->save();
        return response()->json([
            'data'=>$item
        ],200);
    }
    public function show(Shop $shop)
    {
        $item=Shop::where('id',$shop->id)->first();
        if($item){
            return response()->json([
                'data'=>$item
            ],200);
        }else{
            return response()->json([
                'message'=>'not found',
            ],404);
        }
    }
    
}

