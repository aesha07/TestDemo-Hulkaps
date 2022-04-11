<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
   protected $fillable = ['title', 'author', 'description', 'user_id'];
    
    public function tag()
    {
        return $this->belongsToMany(Tags::class, 'post_tag');
    }    
}
