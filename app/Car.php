<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

  protected $fillable = [

      'brand',
      'model',
      'displacement',
      'max_speed'
  ];
}
