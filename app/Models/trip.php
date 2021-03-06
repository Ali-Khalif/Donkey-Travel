<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class trip extends Model
{
    use HasFactory;
    protected $table = "trips";

    protected $fillable =
        ['Omschrijving',
        'Route',
        'AantalDagen'
        ];

    public function booking(): HasMany
    {
        return $this->hasMany(booking::class);
    }

}
