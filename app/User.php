<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  protected $fillable = [
    'name', 'email', 'password',
  ];

  protected $hidden = [
    'password', 'remember_token',
  ];

  public function book(){
    return $this->hasMany('App\Model\Book', 'owner_id');
  }
  public function rentalBooks(){
    return $this->hasMany('App\Model\RentalBook', 'renter_id');
  }

}