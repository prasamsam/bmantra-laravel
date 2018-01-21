<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackController extends Controller
{
    protected $appType='Back';
    protected $page;

    public function __construct(){
        $this->data('appType',$this->appType);
        $this->data('title',$this->title('Welcome'));
        $this->page=$this->appType.'.Page';
    }
    public function title($back,$seperator=' - ',$front= null){
        if (!isset($front)){
            $front='Admin';
        }
        return $back . $seperator . $front;
    }
}
