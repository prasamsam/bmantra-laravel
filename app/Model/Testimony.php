<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    protected $table = 'testimonials';
    public $fillable = ['testheroimage','testimony','testowner','testownerimage','testownerinfo','clientcompanylogo'];
}
