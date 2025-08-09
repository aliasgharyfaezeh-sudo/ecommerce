    <?php
    //include('header.php');
    //include('model/modelCategory.php');
    // $id=$_POST['id'];
    // $category=new modelCategory;

    $id=$GLOBALS['urlArray'][3];
    $id1=$id+0;

    $category=factory::factory('category');
    $category1=$category->find($id1);
    // $x=$category->find($id);
    // $category1=$x->fetch_assoc();
    ?>
    <form action="http://localhost/ecommerce1/updateCategory/<?php echo $category1['id']?>" method="post">
        <!-- <input type="hidden" name="id" value=<?php //echo $category1['id'];?>> -->
        <input type="text" name="title" value=<?php echo $category1['title'];?>>
        <input type="text" name="description" value=<?php echo $category1['description'];?>>
        <button>update</button>
    </form>
    
</body>
</html>