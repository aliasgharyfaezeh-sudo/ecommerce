<?php
class factory{
    public static function factory($className){
        return new $className;
    }
}
