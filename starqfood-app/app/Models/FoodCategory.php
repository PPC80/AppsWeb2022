<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FoodCategory
 *
 * @property $category_id
 * @property $category
 * @property $brief
 *
 * @property Food[] $foods
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FoodCategory extends Model
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
    protected $fillable = ['category_id','category','brief'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function foods()
    {
        return $this->hasMany('App\Models\Food', 'category_id_fk', 'category_id');
    }
    

}
