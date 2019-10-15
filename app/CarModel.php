<?php

namespace App;
use App\Brand;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CarModel extends Model
{
  use SoftDeletes;
  protected $guarded = [];

  // we assume that relationship between brand-models is one to many

  public function brand() {
    return $this->belongsTo(Brand::Class);
  }
}
