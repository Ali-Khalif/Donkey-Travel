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
        'PINCode',
        'Trip_id',
        'Klant_id',
        'Status_id'
    ];

    public function trips(): BelongsTo
    {
        return $this->belongsTo(trip::class, 'Trip_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class, 'Klant_id');
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(status::class, 'Status_id');
    }




}
