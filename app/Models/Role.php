<?php
# @Date:   2020-11-16T21:31:30+00:00
# @Last modified time: 2020-11-16T23:36:51+00:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public function users(){
      return $this->belongsToMany('App\Models\User', 'user_role');

    }
}
