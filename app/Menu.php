<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name", 
   ];
    /**
     * Get the phone record associated with the user.
     */
    public function recipe()
    {
        //return $this->hasOne('App\Recipe', 'id', 'recipe_id');
    }
}
