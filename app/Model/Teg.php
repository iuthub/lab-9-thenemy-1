<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Teg extends Model
{
    public function tags()
    {
        return $this->belongsToMany("App\Model\Post", "post_tag", "tag_id", "post_id")
            ->withTimestamps();
    }
}
