<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $table = 'cases';
    public $fillable = ['caseimage','casename','casecategory','casedetail'];
}
