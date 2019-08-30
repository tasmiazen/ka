<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    //
    protected $table = 'users';

    /**
     * Get the phone record associated with the user.
    */
    public function role()
    {
      return $this->hasOne('App\Models\UserRoles', 'role_id', 'id');
    }


    public function knowledge()
    {
        return $this->belongsTo('App\Models\KnowledgeBase');
    }



    public function KnowledgeBase()
    {
        return $this->belongsTo('App\Models\KnowledgeBase');
    }


    public function thread()
    {
        return $this->belongsTo('App\Models\TicketThread');
    }





}
