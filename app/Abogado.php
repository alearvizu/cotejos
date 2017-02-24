<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abogado extends Model
{
    protected $fillable = [
    	'full_name', 'email', 'phone_number'
    ];
}
