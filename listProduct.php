<?php
// $y=product::all();
//         // $y=product::select(["*"])->get();
//         $k=$y->num_rows/5;
//         $d=ceil($k);
//         for($h=1;$h<=$d;$h++){
        ?>
    
<!-- <form action="http://localhost/ecommerce1/listProduct/page/<?php echo $h;?>" method="post"> -->

<!-- <a href="http://localhost/ecommerce1/listProduct/<?php //echo $sort;?>/<?php //echo $price; ?>">sort<a> -->
<?php
        // }
        ?>

    <select name='sort'>
        <option value="desc">desc</option>
            <option value="asc">asc</option>
    </select>
<select name='value'>
    <option value="price">price</option>
</select>
<button>sort</button>
</form>
<form action="http://localhost/ecommerce1/searchProduct" method="post">
    <input type="text" name="searchvalue" placeholder="num">
    <select name='search'>
        <option value="id">id</option>
        <option value="name">name</option>
        <option value="price">price</option>
        <option value="category">category</option>
        <option value="description">description</option>
    </select>
    <button>search</button>
</form>

<?php
$z=product::farst(1,0)->get();
for($g=1;$g<=$z->num_rows;$g++){
    $product2=$z->fetch_assoc();
    $categorytitle1=category::find($product2['category']);
    // var_dump($categorytitle1);
    ?>
    <div style="width:600px;height:50px;background-color:lightblue;float:left;margin:20px">
        <div style="width:80px;height:20px;background-color:green;float:left;margin:5px">
            <?php echo $product2['id']; ?>
        </div>
        <div style="width:130px;height:20px;background-color:lightgreen;float:left;margin:5px;">
            <?php echo $product2['name']; ?>
        </div>
         <div style="width:80px;height:20px;background-color:green;float:left;margin:5px;">
            <?php echo $product2['price']; ?>
        </div>
        <div style="width:100px;height:20px;background-color:lightgreen;float:left;margin:5px;">
            <?php echo $categorytitle1['title']; ?>
        </div>
        <div style="width:100px;height:20px;background-color:green;float:left;margin:5px;">
            <?php echo $product2['description']; ?>
        </div> 

    <?php
}
?>
<?php

// if(!isset($_POST['sort']) && !isset($_POST['price'])){
    // if($_POST){
    // if(!isset($_POST['sort'])){
    // if(!isset($_POST)){
    //     if(empty($GLOBALS['urlarray'][5])){
    //     $data=product::select(['*'])->getselect();
    // }
// }
// if(isset($_POST['sort'])){
// if(!empty($_POST['sort'])){

//     $sort=$_POST['sort'];
//     $price=$_POST['value'];
//     $data=product::select(['*'])->where('price',20000,'>')->sort($price,$sort);
// }else if(count($GLOBALS['urlArray'])!=5){
//         $sort=$GLOBALS['urlArray'][5];
//         $price=$GLOBALS['urlArray'][6];
        
        
//         $data=product::select(['*'])->where('price',20000,'>')->sort($price,$sort);
//     }


// $data=product::select(['*'])->where('price',20000,'>')->sort('price','desc')->getsqle();
$data=product::select(['*'])->where('price',20000,'>')->getsqle()->get();

var_dump($data);
// $data=product::select(['*'])->where('price',20000,'>')->sort('price','asc');

?>
<div style="width:700px;height:500px;float:left;">
    
    <?php
    $pagenete=5;
    $pagenumber=$GLOBALS['urlArray'][4];
    // var_dump($pagenumber);
    $offset=($pagenumber-1)* $pagenete;
    $limit=$pagenete + $offset;
    
    for($j=$offset;$j<$limit;$j++){
      if(count($data)>$j){
        ?>
        
        <div style="width:100%;height:70px;background-color:yellow;float:left;margin-top:30px;margin-bottom:30px;">
        <div style="width:80px;height:20px;background-color:silver;float:left;margin:5px;">
            <?php echo $data[$j]['id']; ?>
        </div>
        <div style="width:130px;height:20px;background-color:purple;float:left;margin:5px;">
            <?php //var_dump($data[$j]['name']);?>
            <?php echo $data[$j]['name']; ?>
        </div>
         <div style="width:80px;height:20px;background-color:cyan;float:left;margin:5px;">
            <?php echo $data[$j]['price']; ?>
        </div>
        <div style="width:100px;height:20px;background-color:blue;float:left;margin:5px;">
            <?php echo $data[$j]['category']; ?>
        </div>
        <div style="width:100px;height:20px;background-color:teal;float:left;margin:5px;">
            <?php echo $data[$j]['description']; ?>
        </div> 

        <a href="http://localhost/ecommerce1/deleteProduct/<?= $data[$j]['id'];?>">delete</a>
        <a href="http://localhost/ecommerce1/editProduct/<?= $data[$j]['id'];?>">edit</a>
        <!-- <a href="editProduct/<?= $data[$j]['id'];?>">edit</a> -->
        <a href="http://localhost/ecommerce1/singleProduct/<?= $data[$j]['id'];?>">show</a>

        
        
        <?php
 }
    }   
 
 ?>

</div>
</div>

        <?php
        $y=product::all();
        // var_dump($y);
        // $y=product::select(["*"])->get();
        $n=$y->num_rows/5;
        $m=ceil($n);
        // var_dump($m);
        for($j=1;$j<=$m;$j++){
        ?>
        <div style="width:50px;height:30px;background-color:lightblue;float:left;margin:30px;">
        <!-- <a href="http://localhost/ecommerce1/listProduct/page/<?php //echo $j; ?>/<?php //echo $sort;?>/<?php// echo $price;?>"><?php  //echo'page'. $j; ?></a> -->
        <a href="http://localhost/ecommerce1/listProduct/page/<?php echo $j; ?>"><?php  echo'page'. $j; ?></a>

        
        <?php

}

?>
</div>
    
</body>
</html>