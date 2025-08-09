<?php
$id=$GLOBALS['urlArray'][3];
$id1=$id+0;
// $product=factory::factory('product');
product::where("id",$id1,"=")->delete();

// $product->where("id",$id1,"=")->delete();
