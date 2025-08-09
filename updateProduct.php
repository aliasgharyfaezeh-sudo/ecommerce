<?php
// $product=factory::factory('product');
$id=$GLOBALS['urlArray'][3];

product::where("id",$id,"=")->update($_POST);

// $product->where("id",$id,"=")->update($_POST);