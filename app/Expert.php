<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
	protected $table = 'experts';
     protected $fillable = [
        'user_id', 'name',
    ];
}
