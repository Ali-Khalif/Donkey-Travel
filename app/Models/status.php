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
        return $this->hasMany(booking::class);
    }
}
