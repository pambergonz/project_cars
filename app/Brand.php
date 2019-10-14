<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
  protected $guarded = [];

// we assume that relationship between brand-models is one to many

  public function models() {
    return $this->hasMany(CarModel::Class);
  }
}
