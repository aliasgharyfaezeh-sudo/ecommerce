<?php

class modelFooter extends model{
    protected static $tabel="footer";
    public static $base;
    // public function select(){
    //     return $this->connection -> query("SELECT * FROM footer");
    // }

    public static function creatorupdate($post){
        static::obj();
        $count=static::select()->get() -> num_rows;
        // echo $count;
        if($count==1){
            static::update($post);
        }else{
            static::create($post);
        }
    }
}