<?php
$id=$GLOBALS['urlArray'][3];
$id1=$id+0;

$category=factory::factory('category');

$category->where("id",$id,"=")->delete($id);