<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasOne('App\Models\User');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
