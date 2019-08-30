<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'email', 'password',
  ];

    //App\Models\Ticket
    public function ticket()
    {

      return $this->hasOne('App\Models\Ticket');
    }


    public function thread()
    {
        return $this->belongsTo('App\Models\TicketThread');
    }


}
