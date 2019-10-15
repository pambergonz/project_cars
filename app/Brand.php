<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Brand extends Model
{
  use SoftDeletes;
  protected $guarded = [];

// we assume that relationship between brand-models is one to many

  public function models() {
    return $this->hasMany(CarModel::Class);
  }
}
