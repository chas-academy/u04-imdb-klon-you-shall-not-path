<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $primaryKey = 'review_id';
    protected $fillable = ['movie_id', 'username', 'content', 'rating'];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'movie_id'); // Anpassad relation
    }
}
