<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $fillable = ['name', 'surname', 'email', 'phone'];

    public function bookings(){
        return $this->hasMany('App\Models\Bookings');
    }

}
