<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
  protected $fillable = Array("title","author", "id_user");
  public function user(){
    return $this->hasOne('App\User', 'id','id_user');
  }
}
