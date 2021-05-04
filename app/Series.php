<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Series extends Model
{
    protected $fillable = [
        'title',
        'language',
        'category',
        'quality',
        'sinopse'
    ];

     public function season()
     {
         return $this->hasMany(Season::class, 'season', 'id');
     }
}
