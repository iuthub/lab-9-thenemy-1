<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    public function likes()
    {
        return $this->hasMany('App\Model\Like', 'post_id');
    }

    public function tags()
    {
        return $this->belongsToMany("App\Model\Teg", "post_tag", "post_id", "tag_id")
            ->withTimestamps();
    }

}
