<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_path', 'original_width', 'original_height'
    ];

    /**
     * Get the full URL of the image.
     */
    public function getUrlAttribute()
    {
        return asset('storage/' . $this->file_path);
    }
}

