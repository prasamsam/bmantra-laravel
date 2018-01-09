<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends BackController
{
    public function index(){
        try{
            $this->data('title',$this->title('Users'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'.users',$this->data);
        }
    }

    public function addUser(){
        try{
            $this->data('title',$this->title('Add User'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'.adduser',$this->data);
        }
    }
}
