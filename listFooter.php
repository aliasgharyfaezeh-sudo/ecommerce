<?php
// $footer=factory::factory('modelFooter');

$x=modelFooter::select(["*"])->get();
// var_dump($x);
// die($x);

//  $x=$footer->select();
?>

<div style="width:600px;height:500px"> 
    
    <?php
 for($i=1;$i<=$x->num_rows;$i++){
     $footer1=$x->fetch_assoc();
    //  var_dump($footer1);
    ?>
     <div style="width:100%;height:50px;background-color:yellow;float:left;">
    <div style="width:80px;height:20px;background-color:silver;float:left;margin:5px">
            <?php
            echo $footer1['id'];
            // var_dump($footer1)
            ?>
         </div>
        <div style="width:100px;height:20px;background-color:purple;float:left;margin:5px;">
            <?php echo $footer1['nameDesiner']; ?>
        </div>

        <div style="width:100px;height:20px;background-color:teal;float:left;margin:5px;">
            <?php echo $footer1['phoneNumber'];?>
        </div>

        <div style="width:80px;height:20px;background-color:purple;float:left;margin:5px;">
            <?php echo $footer1['description']; ?>
        </div>

        
        <a href="http://localhost/ecommerce1/deleteFooter/<?= $footer1['id'];?>">delete</a>
        
        <a href="http://localhost/ecommerce1/editFooter/<?= $footer1['id'];?>">edit</a>
        
     <?php
     } 
     ?>
        
</div>  
</div>
    
</body>
</html>
