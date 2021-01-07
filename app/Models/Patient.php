<?php
# @Date:   2021-01-03T17:09:50+00:00
# @Last modified time: 2021-01-05T12:51:02+00:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public function user(){
      return $this->belongsTo('App\Models\User');
    }

}
