<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $fillable = ['make', 'model', 'year', 'description', 'customer_id'];


    public function customers(){
        return $this->belongsTo('App\Models\Customers');
    }

}
