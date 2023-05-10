<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
	protected $table = 'skills';
     protected $fillable = [
        'user_id', 'name','percentage'
    ];
}
