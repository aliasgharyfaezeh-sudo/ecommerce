<?php
class autoLoader{
    public function myfunction($className){
        
        $address=$className.".php";
        // var_dump($address);
        if(file_exists($address)){
            include($address);
        }else{
            // var_dump($address );
            $address='model/'.$address;
            include($address);
        }
    }
}

$autoLoader=new autoLoader;
spl_autoload_register([$autoLoader,"myfunction"]);