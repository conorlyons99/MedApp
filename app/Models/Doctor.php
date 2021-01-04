<?php
# @Date:   2020-12-31T00:29:31+00:00
# @Last modified time: 2021-01-04T11:13:48+00:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function visits(){
      return $this->hasMany('App\Models\Visits');
    }
}
