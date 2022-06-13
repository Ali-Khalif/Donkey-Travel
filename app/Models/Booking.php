<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class booking extends Model
{
    use HasFactory;

    protected $table = "bookings";
    protected $fillable = [
        'Startdatum',
        'PINCode',
        'Trip_id',
        'User_id',
        'Status_id'
    ];



}
