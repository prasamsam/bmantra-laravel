<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    public $fillable = ['newsimage','newsheading','newsauthor','newsdetail','newsauthorimage'];
}
