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
        'StartDatum',
        'trip_id',
        ];

    //relationship with trip
    public function trip(): BelongsTo
    {
        return $this->belongsTo(trip::class);
    }
}
