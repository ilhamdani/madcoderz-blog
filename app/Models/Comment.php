<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['comment', 'post_id', 'comment_id', 'comment_type'];
    /**
     * Get all of the owning commentable models.
     */
    public function commentable()
    {
        return $this->morphTo();
    }
    /**
     * Get all of the replies for the comment.
     */
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
