<?php

class Decorator {

    public $sentence ='';

    public function __construct()
    {
        
    }

    public function lower()
    {
        return  strtolower($this->sentence);
    }
    public function uppercase()
    {
        return strtoupper($this->sentence);
    }

}