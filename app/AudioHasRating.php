<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class AudioHasRating extends Authenticatable
{
    protected $table = 'audio_has_rating';
    protected $fillable = ['user_id', 'audio_id', 'rating'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function audio()
    {
        return $this->belongsTo('App\Feed', 'audio_id');
    }
}
