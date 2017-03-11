<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
     protected $fillable = [
    	'full_name', 'email', 'phone_number'
    ];
}
