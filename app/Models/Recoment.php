<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recoment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'recomendar_libros',
    ];

    //Relación 1 a * inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}