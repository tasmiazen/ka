<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{

    /**
     * Get the phone record associated with the user.
     */
    public function meterial()
    {
        return $this->hasOne('App\RawMeterials', 'id', 'meterial_id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         "meterial_id", "quantity", "price"
    ];


}
