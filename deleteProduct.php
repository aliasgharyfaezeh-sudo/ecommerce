<?php
$id=$GLOBALS['urlArray'][3];
$id1=$id+0;
product::where("id",$id1,"=")->delete();
