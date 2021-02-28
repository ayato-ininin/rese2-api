<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    public function liked()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function reserved()
    {
        return $this->belongsToMany('App\Models\User');
    }
   
}

