<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class movie extends Model
{
    use HasFactory;

    protected $table = 'movie'; // Define the table name

    protected $primaryKey = 'movie_id'; // set the custom primary key column

    protected $fillable = ['movie_id', 'title', 'overview', 'vote_count', 'vote_avr', 'realse_date']; // Columns that can be mass-assigned

    public $timestamps = false; // Disable timestams because they are not used in the table
}

