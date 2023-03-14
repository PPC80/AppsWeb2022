<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\User;
use App\Models\RestaurantCategory;
use App\Models\Comment;
use App\Models\Evaluation;


/**
 * Class Food
 *
 * @property $food_id
 * @property $category_id_fk
 * @property $food_name
 * @property $cost
 * @property $time
 * @property $visibility
 * @property $ruc_fk
 *
 * @property FoodCategory $foodCategory
 * @property Restaurant $restaurant
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Food extends Model
{
    
    static $rules = [
		'food_id' => 'required',
		'category_id_fk' => 'required',
		'food_name' => 'required|max:50',
		'cost' => 'required|numeric',
		'visibility' => 'required',
		'ruc_fk' => 'required|max:13',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['food_id','category_id_fk','food_name','cost','time','visibility','ruc_fk'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function foodCategory()
    {
        return $this->hasOne('App\Models\FoodCategory', 'id', 'category_id_fk');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function restaurant()
    {
        return $this->hasOne('App\Models\Restaurant', 'ruc', 'ruc_fk');
    }
    

}
