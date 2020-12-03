<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sociedad()
    {
        return $this->belongsTo(Sociedad::class);
    }
}
