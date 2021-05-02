<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function post()
    {
        return $this->belongsTo('App\Mode\Post', 'post_id');
    }
}
