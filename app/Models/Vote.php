<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = 'vote';
    protected $primaryKey = 'vote_id';

    protected $fillable = ['vote', 'movie_id', 'user_id'];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function reviews()
    {
        return $this->belongsToMany(Review::class, 'review_vote', 'vote_id', 'review_id');
    }

}
