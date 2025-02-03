<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genre';
    protected $primaryKey = 'genre_id';

    public function movie()
    {
        return $this->belongsToMany(Actor::class, 'actor_genre', 'genre_id', 'actor_id');
    }

    public function actor()
    {
        return $this->belongsToMany(Movie::class, 'movie_genre', 'genre_id', 'movie_id');
    }
}
