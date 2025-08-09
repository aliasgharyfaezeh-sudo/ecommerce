<?php
class model extends mainDB{
// public static $base;
public static $crud;
public static $obj;
public static $result;
public static $update;
public static $where;
public static $createkey;
public static $createvalue;
public static $creatkey;
public static $creatvalue;
public static $as;
public static $ta;
public static $limit;
public static $type;
public static $products=[];
public static $values=[];
public static $with;
public static $fields=[];
public static $from;
public static $form;
public static $query;

public static function from(){
    // static::obj();
    static::$form="from";
    static::$from.=" FROM ".static::$tabel;
    
    return static::$obj;
}

public static function with(array $table){
    static::$type='with';
    foreach($table as $key=>$value){
    $id=static::$related[$key][0];
    $id1=static::$related[$key][1];

    $key::select($value)->from()->where($id,$id1,"=");
    $subselect=$key::$base . $key::$crud;
    
    static::$query.=" , " ."( ".$subselect." )"."product_".$key;
    // static::$from="";
    static::obj();
    static::from();

    // var_dump(static::$base);
}
    return static::$obj;
    
}

// public  static function getselect(){
//     static::obj();
//     $s=static::get();
//     for($d=1;$d<=$s->num_rows;$d++){
//         $value=$s->fetch_assoc();
        
//         $categorytitle=category::find($value['category']);
//         $value['category']=$categorytitle['title'];
//         static::$values[]=$value;
//         // var_dump($value);

//     }
//     return static::$values;
// }


public static function sort($field,$sort){
    // var_dump($field);
    static::obj();
    $s=static::get();
    for($d=1;$d<=$s->num_rows;$d++){
        $value=$s->fetch_assoc();
        
        $categorytitle=category::find($value['category']);
        $value['category']=$categorytitle['title'];
        // var_dump($value);
        static::$values[]=$value;
    }
    // echo "hello💚💚💚💛🧡🧡";
    $b=count(static::$values);
    // var_dump($b);
    if($sort=='desc'){
        for($o=0;$o<$b;$o++){
            for($g=0;$g<$b-1;$g++){
                if(static::$values[$g][$field]<static::$values[$g+1][$field]){
                    $c=static::$values[$g];
                    static::$values[$g]=static::$values[$g+1];
                    static::$values[$g+1]=$c;
                }
            }
        }
        // var_dump(static::$values);
    }else if($sort=='asc'){
        $b=count(static::$values);
            for($o=0;$o<$b;$o++){
                for($g=0;$g<$b-1;$g++){
                    if(static::$values[$g][$field]>static::$values[$g+1][$field]){
                        $c=static::$values[$g];
                        static::$values[$g]=static::$values[$g+1];
                        static::$values[$g+1]=$c;
                    }
                }
            }

    }
        return static::$values;
}

   public static function all(array $fields=['*']){
    // $h=static::select()->get();
    // var_dump($h);             

    return static::select()->from()->get();             
   }

    public static function pagenate($limit){
        static::obj();
        $pagenumber=$GLOBALS['urlArray'][4];
        $offset=($pagenumber-1)*$limit;
        static::$limit=" LIMIT ". $limit . " OFFSET " . $offset;
        return static::$obj;       
    }

    public static function count(){
        static::obj();
        // var_dump(count('*'));
        static::$base="SELECT count(*) FROM " . static::$tabel;
        // return static::get();
        // var_dump(static::$base);
        return static::$obj;
        // return static::$base;
    
    }


    public static function farst($one,$zoo){
      static::obj();
      static::$from='farst';
      static::select()->from();
      static::$base.=" LIMIT ". $one . " OFFSET " . $zoo ;
    //   var_dump(static::$base);
      return static::$obj;

    }

    public static function limit($ta,$as){
        static::$type="limit";
        static::$limit="";
        static::$ta=$ta;
        static::$as=$as;
        if(static::$ta<static::$as){
            static::$limit=" LIMIT ". static::$as-static::$ta ." OFFSET ".static::$ta;
            $x=static::select()->get();

            for($i=1;$i<=$x->num_rows;$i++){
                $product1=$x->fetch_assoc();
                $categorytitle=category::find($product1['category']);
                $product1['category']=$categorytitle['title'];

                static::$products[]=$product1;
                // var_dump(static::$products);
            }
                
            $a=count(static::$products);
            for($l=0;$l<$a;$l++){
                for($j=0;$j<$a-1;$j++){
                    if(static::$products[$j]['price']<static::$products[$j+1]['price']){
                        $b=static::$products[$j];
                        static::$products[$j]=static::$products[$j+1];
                        static::$products[$j+1]=$b;
                    }
                }
            }
        }else{
            static::$limit=" LIMIT ". static::$ta-static::$as ." OFFSET ".static::$as;
            $x=static::select()->get();
            for($i=1;$i<=$x->num_rows;$i++){
                $product1=$x->fetch_assoc();
                $categorytitle=category::find($product1['category']);
                $product1['category']=$categorytitle['title'];
                static::$products[]=$product1;
            }
                
            $a=count(static::$products);
            for($l=0;$l<$a;$l++){
                for($j=0;$j<$a-1;$j++){
                    if(static::$products[$j]['price']>static::$products[$j+1]['price']){
                        $b=static::$products[$j];
                        static::$products[$j]=static::$products[$j+1];
                        static::$products[$j+1]=$b;
                    }
                }
            } 
        }
        $query=static::get();
        // var_dump(static::$products);
        return static::$products;
    }
        
    public static function select(array $fields=['*']){
        static::obj();
        static::$type="select";
        static::$base="";
        // static::$base = "SELECT " . implode(", ", $fields) . " FROM " . static::$tabel ;
        static::$base = "SELECT " . implode(", ", $fields);

        // var_dump(static::$base);
        return static::$obj;    
    }
    

        
    public static function find($id){
        static::obj();
        // static::$from="find";
        // static::$base = "SELECT * FROM " . static::$tabel . " WHERE id = $id ";
        static::$base = "SELECT * ";
        static::from();
        static::$base.=" WHERE id = $id ";
        
        
        $title=static::get();
        // $x=$title->fetch_assoc();

        // var_dump($x);
        return $title->fetch_assoc();
    }
        
    public function delete(){
        static::$type="delete";
        // static::$base="DELETE FROM ". static::$tabel . static::$crud;
        static::$base="DELETE ";
        // static::from();
        // static::$base.=static::$crud;
        // static::$crud="";
        // var_dump(static::$base);


        // static::get();
    }
    
        
    public static function update($data){
        static::obj();
        static::$type='update';
        $x=1;
        foreach($data as $key=>$value){
            static::$update.=$key."='".$value."'";
            if(count($data)>$x){ // why?
                static::$update.=",";
                $x++;
            }
        }
        static::$base="UPDATE ". static::$tabel." SET ". static::$update ;
        static::getsqle();
        static::get();
    }
    
        
    public static function create($data){
        static::obj();
        static::$type='insert';
        foreach($data as $key=>$value){
            static::$createkey[]= $key;
            static::$createvalue[]=$value;
        }
        
        static::$creatkey=implode(" , ",static::$createkey);
        static::$creatvalue=implode(" ' , ' ",static::$createvalue);
        
        static::$base="";
        static::$base .= "INSERT INTO " . static::$tabel ." ( " .static::$creatkey. " ) " . " VALUES " ." ( ". " ' " . static::$creatvalue." ' "." ) ";
        // var_dump(static::$base);
        static::get();
        
    }

    public static function getsqle(){
        static::obj();
        if (!in_array(static::$type, ['insert','update'])){
            static::from();
            static::$base.=static::$from;
            static::$form ="";
            // var_dump(static::$base);
        }
        if (!empty(static::$crud)){
            static::$base.=static::$crud;
            static::$crud="";
        } 
            // var_dump()
        if (isset(static::$limit)){
            static::$base.=static::$limit;
            static::$limit="";
        }
        var_dump(static::$base);
        return static::$obj;    

        // return static::$base;

    } 
    
    public static function get(){
        static::obj();
        return static::$connection->query(static::$base);
    }
        // if (!in_array(static::$type, ['select', 'with', 'delete','limit'])){
        // if (!in_array(static::$type, ['select', 'with', 'delete'])){

        //     throw new \Exception("FROM can only be added to SELECT, WHITH OR DELETE");
        // }

        // var_dump(static::from());
        // die("dsadsads");
        // if (!in_array(static::$type, ['insert','update'])){
        //     static::from();
        //     static::$from ="";
        //     // var_dump(static::$base);
        // }
        // // if(!static::$type=='farst'){
        // // if(static::$type!='farst'){
        // // static::from();
        // // } 
        // // if(in_array(static::$type, ['select', 'with', 'delete']){}
        // if (!empty(static::$crud)){
        // static::$base.=static::$crud;
        // static::$crud="";
        // } 
        // // var_dump()
        // if (isset(static::$limit)){
        //     static::$base.=static::$limit;
        //     static::$limit="";
        // }

        // var_dump(static::$base);

    public static function where(string $field, $value, string $operator = '='){
        // var_dump(static::$obj);
        // static::obj();
        // echo "salam";
        static::$where=[];
        static::$crud="";
        static::$where[] = "$field $operator $value";
        static::$crud =" WHERE ".implode(static::$where);
           var_dump(static::$crud);
        if(static::$type==""){
            static::select();
        }
        return static::$obj;
        
    }                                               
}