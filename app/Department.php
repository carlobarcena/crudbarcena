<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    function employees() {
    	return $this->hasMany('App\Employee','id','department');
    }
}
