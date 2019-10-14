<?php

namespace App;
use App\Brand;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
  protected $guarded = [];

  // we assume that relationship between brand-models is one to many

  public function brand() {
    return $this->belongsTo(Brand::Class);
  }
}
