<?php
# @Date:   2020-11-26T12:52:52+00:00
# @Last modified time: 2021-01-05T15:52:05+00:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visits extends Model
{
    use HasFactory;

    public function doctor(){
      return $this->belongsTo('App\Models\Doctor');
    }

    public function user(){
      return $this->belongsTo('App\Models\User');
    }

}
