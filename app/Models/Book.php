<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function isFavorito($userId)
    {
        return Favorito::where('user_id', $userId)
            ->where('favorito_id', $this->id)
            ->exists();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function calificacion()
    {
        return $this->belongsTo(Calificacion::class);
    }

    //Relación polimorfica 1 * 1
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
