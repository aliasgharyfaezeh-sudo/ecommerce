<?php
// $footer=factory::factory('modelFooter');

$x=modelFooter::select(["*"])->from()->get();
// var_dump($x);
// $x=$footer->select(["id","nameDesiner", "phoneNumber","description"]);


// for($i=1;$i<=$x->num_rows;$i++){
// $y=$x->num_rows;
// var_dump($y);
    if($x->num_rows==0){
        echo "Hello";
    }else{
        $footer1=$x->fetch_assoc();
        // die($footer1);

?>

<div style="width:1050px;height:60px;background-color:silver;margin-top:20px;margin-left:240px;margin-right:240px;">

    <div style="width:150px;height:30px;background-color:blue;float:left;margin:10px;">
            <?php
            echo $footer1['nameDesiner'];
            ?>
         </div>
    <div style="width:150px;height:30px;background-color:lightblue;float:left;margin:10px;">
            <?php
            echo $footer1['phoneNumber'];
             ?>
        </div>
    <div style="width:150px;height:30px;background-color:blue;float:left;margin:10px;">
            <?php
            echo $footer1['description'];
             ?>
        </div>

<?php
}
?>
</body>
</html>