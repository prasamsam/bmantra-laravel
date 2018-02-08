<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
class DashboardController extends BackController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        try{
            $this->data('title',$this->title('Welcome'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'.dashboard',$this->data);
        }
    }
}
