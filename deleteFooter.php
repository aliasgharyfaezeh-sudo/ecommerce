<?php
// $id=$_POST['id'];

$id=$GLOBALS['urlArray'][3];
$id1=$id+0;

$footer=factory::factory('modelFooter');

$footer->where("id",$id1,"=")->delete();
