<?php
include('autoload.php');

$loadfile=new loadfile;


$url1=$_SERVER['REQUEST_URI'];
$roter=new roter($url1);
$urlArray=$roter->parsUrl();


$loadfile->load('header');
// var_dump($urlArray[2]);
$loadfile->load($urlArray[2]);
$loadfile->load('footer');