<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * Get the user that authored the comment.
     */
    /* public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }*/

    /**
     * Get the serie that authored the comment.
     */
    /*public function series()
    {
        return $this->belongsTo(Serie::class, 'serie_id');
    }*/
}
