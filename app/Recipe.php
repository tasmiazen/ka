<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        "name"
    ];

    protected $casts = [
        'material_data' => 'array'
    ];

    public function makeRecipe()
    {
    	return $this->belongsToMany('App\MakeRecipe');
    }
}
