<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movie';
    protected $primaryKey = 'movie_id';

    public function genre()
    {
        return $this->belongsToMany(Genre::class, 'movie_genre', 'movie_id', 'genre_id');
    }

    public function actor()
    {
        return $this->belongsToMany(Actor::class, 'movie_actor', 'movie_id', 'actor_id');
    }

    public function watchlist()
    {
        return $this->belongsToMany(Watchlist::class, 'movie_list', 'movie_id', 'list_id');
    }
}
