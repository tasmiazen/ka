<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RawMeterials extends Model
{

    protected $table = 'raw_meterials';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name", "unit",
   ];


       /**
     * Get the user that owns the phone.
     */
    public function stock()
    {
        return $this->belongsTo('App\Stock');
    }

    public function makeRecipe()
    {
        return $this->belongsToMany('App\MakeRecipe');
    }
}
