<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MakeRecipe extends Model
{
    //
    protected $table = 'make_recipes';

    public function recipe()
    {
    	return $this->hasOne('App\Recipe', 'id', 'recipe_id');
    }

    public function meterial()
    {
        return $this->hasOne('App\RawMeterials', 'id', 'meterials_id');
    }
}
