<?php
//  $data=product::select(['*'])->pagenate(5)->limit($_POST);
// $data=product::select(["*"])->pagenate(5,$_POST)->get();

  if(!empty($_POST)){
    $ta=$_POST['to'];
    $as=$_POST['from'];
  }else{
    $ta=$GLOBALS['urlArray'][6];
    $as=$GLOBALS['urlArray'][5];

  }
  // var_dump($ta);

  $data=product::select()->limit($ta,$as);





// $data=product::select()->limit($ta1,$as1);


$pagenete=5;
$pagenumber=$GLOBALS['urlArray'][4];
// var_dump($pagenumber);
$offset=($pagenumber-1)* $pagenete;
$limit=$pagenete + $offset;

for($j=$offset;$j<$limit;$j++){
  if(count($data)>$j){
  echo $data[$j]['id']."</br>";
  echo $data[$j]['name']."</br>";
  echo $data[$j]['price']."</br>";
  echo $data[$j]['category']."</br>";
  echo $data[$j]['description']."</br>";

  }


  // if($data[$j]['price']>$j){

// foreach($data as $key=>$values){
//   foreach($values as $key=>$value){
//     echo $value."</br>";
//   }
// }
}
// }

?>
    <?php
        // $y=product::all();
        $y=product::select(["*"])->get();
        $n=$y->num_rows/5;
        $m=ceil($n);
        
        // var_dump($m);
        for($i=1;$i<=$m;$i++){
            ?>

<div style="width:50px;height:30px;background-color:lightblue;float:left;margin:30px;">
<a href="http://localhost/ecommerce1/getLimit/page/<?php echo $i;?>/<?php echo $as; ?>/<?php echo $ta; ?>">
  <?php  echo'page'. $i; ?>
  </a>
        <?php
          }
        ?>

</div>
    
 <?php 
// $y=product::select(["*"])->get();
// $n=$y->num_rows/5;
// $m=ceil($n);
// // var_dump($m);
// for($j=1;$j<=$m;$j++){
// ?>
<!-- <div style="width:50px;height:30px;background-color:lightblue;float:left;margin:30px;">
 <a href="http://localhost/ecommerce1/listProduct/page/<?php //echo $j; ?>"><?php  //echo'page'. $j; ?></a> -->

 <?php

// }

// ?>
 <!-- </div> -->
  <?php
//  for($i=1;$i<=$m;$i++){
          // if($i==1){
            ?>
<!-- <div style="width:50px;height:30px;background-color:lightblue;float:left;margin:30px;"> -->
<!-- <a href="http://localhost/ecommerce1/getLimit/page/<?php //echo $i;?>"> -->
   <?php // echo'page'. $i; ?>
<!-- </a> -->
<!-- </div> -->
        <?php
          // }else{
        ?>
<!-- <div style="width:50px;height:30px;background-color:lightblue;float:left;margin:30px;"> -->
<!-- <a href="http://localhost/ecommerce1/getLimit/page/<?php //echo $i;?>/<?php //$as; ?>/ <?php //$ta; ?>"> -->
  <?php  //echo'page'. $i; ?>
  <!-- </a> -->
        <?php
          // }
        ?>

        
        <?php

// }
// }

?>
<!-- </div> -->



