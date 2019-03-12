<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //protected $guarded = [];

    protected $fillable = [
        'id',
        'name',
        'description',


    ];


    public function projects(){
        return $this->hasMany('App\Project');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
