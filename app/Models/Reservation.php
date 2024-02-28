<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'name',
        'email',
        'pickdate',
        'dropdate',
        
    ];

    protected $table = 'reservations';

    public function car(){
        return $this->hasOne('App\Models\Car', 'id', 'car_id');
    }
}
