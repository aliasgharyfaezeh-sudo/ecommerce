<?php
class roter{
    public $url;
    public $urlArray;
    public function __construct($url){
        $this->url=$url;
    }
    public function parsUrl(){
        // $this->urlArray=explude("/",$this->url);
        // return $this->urlArray;
        $address = $this -> urlArray = explode( "/" , $this->url );
        return $address;
    }
}

// $url1=$_SERVER['REQUEST_URI'];
// $roter=new roter($url1);
// $urlArray=$roter->parsUrl();