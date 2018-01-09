<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends FrontController
{
    public function __construct(){
        parent::__construct();
    }

    public function index(){

        try{
            $this->data('title',$this->title('Welcome'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'.Home.home',$this->data);
        }
    }

    public function contact(){
        try{
            $this->data('title',$this->title('Contact'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'.Contact.contact',$this->data);
        }
    }

    public function about(){
        try{
            $this->data('title',$this->title('About'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'.About.about',$this->data);
        }
    }

    public function services(){
        try{
            $this->data('title',$this->title('Services'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'.Services.services',$this->data);
        }
    }

    public function cases(){
        try{
            $this->data('title',$this->title('Cases'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'.Cases.cases',$this->data);
        }
    }

    public function ClientLogIn(){
        try{
            $this->data('title',$this->title('Log In'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'.Client.login',$this->data);
        }
    }


    public function ClientSignUp(){
        try{
            $this->data('title',$this->title('Sign Up'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'.Client.signup',$this->data);
        }
    }

    public function UserPortal(){
        try{
            $this->data('title',$this->title('Welcome User'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'.Client.client_portal',$this->data);
        }
    }



}
