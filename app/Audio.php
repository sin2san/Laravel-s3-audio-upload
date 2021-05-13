<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Audio extends Authenticatable
{
    protected $table = 'audios';
    protected $fillable = ['title', 'description', 'audio', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function rating()
    {
        return $this->hasMany('App\AudioHasRating');
    }
}
