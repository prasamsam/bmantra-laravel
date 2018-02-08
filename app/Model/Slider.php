<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Slider extends Authenticatable
{
    public $table = 'slider';
    public $fillable = ['sliderimage','sliderdescription','slidesummary'];
}
