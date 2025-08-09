<?php
// $category=factory::factory('category');
$x=category::select(["*"])->get();

// $x=$category->select(["*"])->get();

?>

 <div style="width:600px;height:500px"> 

<?php
 for($i=1;$i<=$x->num_rows;$i++){
     $category1=$x->fetch_assoc();
    ?>
     <div style="width:100%;height:50px;background-color:yellow;float:left;">
    <div style="width:80px;height:20px;background-color:silver;float:left;margin:5px">
            <?php
            echo $category1['id'];
            ?>
         </div>
        <div style="width:100px;height:20px;background-color:purple;float:left;margin:5px;">
            <?php 
            echo $category1['title'];
             ?>
        </div>
        <div style="width:100px;height:20px;background-color:teal;float:left;margin:5px;">
            <?php
             echo $category1['description'];
             ?>
        </div>


        <a href="http://localhost/ecommerce1/deleteCategory/<?= $category1['id'];?>">delete</a>
        
        <a href="http://localhost/ecommerce1/editCategory/<?= $category1['id'];?>">edit</a>

        <a href="http://localhost/ecommerce1/singleCategory/<?= $category1['id'];?>">show</a>


        
     <?php
     } 
     ?>
        
</div>  
</div>
    
</body>
</html>



