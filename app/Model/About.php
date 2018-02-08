<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';
    public $fillable = ['companyoverview','ourmission','firstimage','secondimage','bannerinfo','bloquote'];
}
