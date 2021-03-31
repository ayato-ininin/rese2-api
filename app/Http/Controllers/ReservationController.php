<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function post(Request $request)
    {
        $now=Carbon::now();
        $item=new Reservation;
        $item->user_id=$request->user_id;
        $item->shop_id=$request->shop_id;
        $item->date=$request->date;
        $item->time=$request->time;
        $item->number=$request->number;
        $item->created_at=$now;
        $item->updated_at=$now;
        $item->save();
        return response()->json([
            'message'=>'reserve successfully',
            'data'=>$item
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function delete(Reservation $reservation)
    {
         $item=Reservation::where('id',$reservation->id)->delete();
        if ($item) {
            return response()->json([
                'message' => 'Deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
     public function getReservationsShops(Request $request){
        $user=User::find($request->user_id);
        $reserve=$user->getReservationsFromUser;
        return response()->json(
            ['data'=>$reserve
        ],200
        );

    }
   
}
