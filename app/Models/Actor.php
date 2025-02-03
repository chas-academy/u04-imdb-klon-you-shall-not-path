<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actor';
    protected $primaryKey = 'actor_id';

    public function genre()
    {
        return $this->belongsToMany(Genre::class, 'actor_genre', 'genre_id', 'actor_id');
    }

    public function movie()
    {
        return $this->belongsToMany(Movie::class, 'movie_actor', 'actor_id', 'movie_id');
    }
}
