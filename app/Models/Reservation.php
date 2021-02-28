<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    public function reserUser()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function reserShop()
    {
        return $this->belongsTo('App\Models\Shop');
    }

}
