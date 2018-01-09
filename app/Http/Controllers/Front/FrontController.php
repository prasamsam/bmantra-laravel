<?php

namespace App\Http\Controllers\Front;

use App\Traits\General;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class FrontController extends Controller
{
    protected $appType='Front';
    protected $page;

    public function __construct(){
        $this->data('appType',$this->appType);
        $this->data('title',$this->title('Welcome'));
        $this->page=$this->appType.'.Page';
    }
    public function title($back,$seperator=' - ',$front= null){
        if (!isset($front)){
            $front=Config::get('site.name');
        }
        return $back . $seperator . $front;
    }
}
