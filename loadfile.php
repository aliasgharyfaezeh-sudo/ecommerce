<?php
class loadFile{
    public function load($fileName){
        $file = $fileName .".php";
        if(file_exists($file)){
            include($file);
        }else{
            $file=$urlArray[3].".php";
            include('model/'.$file);
            
            // echo "File not found:". $file;
        }
    }
}
