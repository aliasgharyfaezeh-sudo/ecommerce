<?php
$id=$GLOBALS['urlArray'][3];

$category=factory::factory('category');
$category->where("id",$id,"=")->update($_POST);