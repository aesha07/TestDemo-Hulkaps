<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $table = 'commant';

    protected $fillable = ['comment', 'posts_id'];
}
