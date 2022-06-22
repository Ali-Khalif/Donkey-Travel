<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Herbergen extends Model
{
    use HasFactory;
    protected $table = 'herbergen';

    protected $fillable = [
        'Naam',
        'Adres',
        'Telefoon',
        'Email',
        'Coordinaten',
    ];

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

    public function pauzeplaatsen()
    {
        return $this->hasMany(Pauzeplaatsen::class);
    }


}
