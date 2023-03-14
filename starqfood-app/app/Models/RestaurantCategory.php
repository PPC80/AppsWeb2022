<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RestaurantCategory
 *
 * @property $category_id
 * @property $category
 *
 * @property Restaurant[] $restaurants
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RestaurantCategory extends Model
{
    
    static $rules = [
		'category_id' => 'required',
		'category' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['category_id','category'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function restaurants()
    {
        return $this->hasMany('App\Models\Restaurant', 'category_id_fk', 'category');
    }
    

}
