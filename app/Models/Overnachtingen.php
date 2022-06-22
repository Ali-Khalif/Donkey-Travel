<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Overnachtingen extends Model
{
    use HasFactory;
    protected $table = 'overnachtingen';
    protected $fillable = ['Booking_id', 'Herberg_id', 'Status_id'];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class, 'Booking_id');
    }

    public function herberg(): BelongsTo
    {
        return $this->belongsTo(Herbergen::class, 'Herberg_id');
    }

    public function status(): BelongsTo
    {
        return $this->BelongsTo(Status::class, 'Status_id');
    }


}
