<?php


namespace App\Traits;

trait General{
        public $data=[];
        public function data($key,$value=''){
            if(!isset($key)) throw new \Exception('Undefined Key');

            return $this->data[$key]=$value;
        }
    }
