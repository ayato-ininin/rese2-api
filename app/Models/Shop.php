<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
            public function toId()
    {
        return $this->hasMany('App\Models\Like');
    }

    public function fromId()
    {
        return $this->hasMany('App\Models\Book');
    }
}

