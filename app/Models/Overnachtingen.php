<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overnachtingen extends Model
{
    use HasFactory;
    protected $table = 'overnachtingen';
    protected $fillable = ['Booking_id', 'Herberg_id', 'Status_id'];


}
