<?php

$id=$GLOBALS['urlArray'][3];
$id1=$id+0;
$array=['category'=>['title']];
$x=product::select(['id','name','price','description'])->with($array)->where('id',$id1,'=')->get();
$product1=$x->fetch_assoc();
// $product1=product::find($id1);
// var_dump($product1);
// $titlecategory=category::select(["id","title"])->get();
// var_dump($titlecategory);


?>
<!-- <form action="http://localhost/ecommerce/updateProduct/<?php //echo $product1['id']?>" method="post"> -->
<form action="http://localhost/ecommerce1/updateProduct/<?php echo $id ?>" method="post">

<input type="text" name="name" value="<?php echo $product1['name'];?>">
<input type="number" name="price" value="<?php echo $product1['price'];?>">
<input type="text" name="description" value="<?php echo $product1['description'];?>">

<select name="category">
    
    <?php
    for($i=1;$i<=$titlecategory->num_rows;$i++){
        $categorytitle1=$titlecategory->fetch_assoc();
       ?>

            <option value="<?=  $categorytitle1['id'];?>">
              <?=  $categorytitle1['title'];?>
            </option>

    
        <?php
              }
        ?>

</select>

<button>update</button>
</form>

</body>
</html>
