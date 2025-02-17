<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $table = 'actor';
    protected $primaryKey = 'actor_id';

    protected $fillable = ['name'];

    public function genre()
    {
        return $this->belongsToMany(Genre::class, 'actor_genre', 'actor_id', 'genre_id');
    }

    public function movie()
    {
        return $this->belongsToMany(Movie::class, 'movie_actor', 'actor_id', 'movie_id');
    }
}
