<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WatchList extends Model
{
    protected $table = 'list';
    protected $primaryKey = 'list_id';

    // ADD a function belongsToMany regarding movies
}
