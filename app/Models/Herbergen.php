<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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


}
