<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    Protected $table = 'otherinfo';
    public $fillable = ['companyaddress','openinghour','closinghour','openingdayfrom','closingdayto','companylogo','companynumber','companyemail','companyfax'];
}
