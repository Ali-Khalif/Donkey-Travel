<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pauzeplaatsen extends Model
{
    use HasFactory;
    protected $table = 'pauzeplaatsen';

    protected $fillable = [
        'boeking_id',
        'restaurant_id',
        'status_id',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }

    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(restaurant::class, 'restaurant_id');
    }

    public function status(): BelongsTo

    {
        return $this->belongsTo(status::class, 'status_id');
    }


}
