<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
  protected $fillable = [
    "title",
    "author",
    "id_user",
    "is_rent"
  ];
  public function user(){
    return $this->hasOne('App\User', 'id','id_user');
  }
}
