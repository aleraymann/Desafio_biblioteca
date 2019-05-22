<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
    'title',
    'author',
    'owner_id',
    'is_rent',
  ];
    public function owner()
    {
        return $this->hasOne('App\User', 'id', 'owner_id');
    }
}
