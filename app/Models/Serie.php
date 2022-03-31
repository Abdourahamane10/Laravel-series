<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    /**
     * Get the user that authored the serie.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }


    /**
     * Get the serie comments.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'serie_id');
    }
}
