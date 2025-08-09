<?php
class mainDB {
    public static $serverName="localhost";
    public static $userName="root";
    public static $password="";
    public static $DBName="ecommerce1";
    // protected static $tabel;
    protected static $tabel;

    
    public static $connection;

    
    public static function obj(){
        static::$obj=new static;
        // var_dump(static::$obj);
        
        // return static::$obj;
    }


    public function __construct(){
        // $this->connection=new mysqli($this->serverName,$this->userName,$this->password,$this->DBName);

        // self::$obj->connection=new mysqli(self::$obj->serverName,self::$obj->userName,self::$obj->password,self::$obj->DBName);
        static::$connection=new mysqli(self::$serverName,self::$userName,self::$password,self::$DBName);
    }

    
}


?>
