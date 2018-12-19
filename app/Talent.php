<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    
	protected $fillable =  [
		'lastname', 'firstname', 'skill', 'location'
	];
    

}



