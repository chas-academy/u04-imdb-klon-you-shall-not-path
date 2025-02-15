<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review';
    protected $primaryKey = 'review_id';
    protected $fillable = ['title', 'review', 'approved', 'movie_id', 'user_id'];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function votes()
    {
        return $this->belongsToMany(Vote::class, 'review_vote', 'review_id', 'vote_id');
    }
}
