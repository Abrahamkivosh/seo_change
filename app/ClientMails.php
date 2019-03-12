<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientMails extends Model
{
     //
     protected $fillable = [
        'to',
        'subject',
        'body',
        'user_id',

    ];


    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
