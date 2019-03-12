<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'name',
        'website',
        'status',
        'category',
        'file',
        'company_id',
        'user_id',


    ];


    public function users(){
		return $this->belongsToMany('App\User');
    }

    public function admins()
    {
        return $this->belongsToMany('App\Admin');
    }


    public function company(){
		return $this->belongsTo('App\Company');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

}
