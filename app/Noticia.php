<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    public function sociedad()
    {
        return $this->belongsTo(Sociedad::class);
    }
}
