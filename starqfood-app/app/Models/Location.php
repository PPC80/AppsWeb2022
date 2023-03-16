<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'longitude',
        'latitude',
        'ruc_fk'
    ];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class,'ruc_fk','ruc');
    }

}
