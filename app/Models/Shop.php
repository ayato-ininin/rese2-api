<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
            public function Liked()
    {
        return $this->hasMany('App\Models\Like');
    }

    public function Reserved()
    {
        return $this->hasMany('App\Models\Reservation');
    }
   
}

