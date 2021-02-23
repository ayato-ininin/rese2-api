<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
     use HasFactory;
     public function to1UserId()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function from1UserId()
    {
        return $this->belongsTo('App\Models\Shop');
    }

}
