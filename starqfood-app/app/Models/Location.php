<?php

// namespace App;

// use Illuminate\Database\Eloquent\Model;

// class Marker extends Model
// {
//     protected $fillable = ['lat', 'lng'];
// }

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'longitude',
        'latitude',
        'ruc'
    ];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class,'ruc');
    }
}
