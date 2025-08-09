<?php

// $x=product::select(['*'])->get();
$array=['category'=>['title']];
$x=product::select(['id','name','price','description'])->with($array)->get();

// $x=product::select1(['id','name','price','description'])->select2(['title'],'category','id','category','product_category')->select3()->get();

$search=$_POST['search'];

// var_dump($search);
for($i=1;$i<=$x->num_rows;$i++){
    $data=$x->fetch_assoc();
    // var_dump($data);
    // $categorytitle=category::find($data['category']);
    // $data['category']=$categorytitle['title'];
// var_dump($data[$search]);
    if($_POST['searchvalue']==$data[$search]){

        echo $data['id']."</br>";
        echo $data['name']."</br>";
        echo $data['price']."</br>";
        echo $data['product_category']."</br>";
        echo $data['description']."</br>";
    }
}
?>
