<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RentalBook extends Model
{
    protected $fillable = [
        'renter_id',
        'book_id',
        'date_rental',
        'date_devolution',
    ];

    public function renter()
    {
        return $this->belongsTo('App\User', 'renter_id');
    }
    public function book()
    {
        return $this->belongsTo('App\Model\Book', 'book_id');
    }
}
