<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class status extends Model
{
    use HasFactory;

    protected $table = "statuses";
    protected $fillable = [
        'StatusCode',
        'Status',
        'Verwijderbaar',
        'PIN',
    ];

    public function booking(): HasMany
    {
        return $this->hasMany(Booking::class, 'status_id');
    }

    //pauzeplaatsen
    public function pauzeplaatsen(): HasMany
    {
        return $this->hasMany(Pauzeplaatsen::class);
    }

    public function restaurant(): HasMany
    {
        return $this->hasMany(Restaurant::class);
    }

    public function herbergen(): HasMany
    {
        return $this->hasMany(Herbergen::class);
    }

    public function overnachtingen(): HasMany
    {
        return $this->hasMany(Overnachtingen::class);
    }

}
