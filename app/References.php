<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class References extends Model
{
	protected $table = 'references';
    protected $fillable = [
        'user_id', 'name','year','year_end','about'
    ];
   
}
