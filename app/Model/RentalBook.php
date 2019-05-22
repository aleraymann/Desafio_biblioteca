<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RentalBook extends Model
{
  protected $fillable = [
    "id_user",
    "id_book",
    "date_rental",
    "date_devolution"
  ];

  public function user(){
    return $this->belongsTo('App\User', 'id_user');
  }
  public function book(){
    return $this->belongsTo('App\Model\Book', 'id_book');
  }

}
