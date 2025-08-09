    <?php
    $id=$GLOBALS['urlArray'][3];
    $id1=$id+0;

    $category=factory::factory('category');

    $category1=$category->find($id1);

    echo $category1['id']."</br>";
    echo $category1['title']."</br>";
    echo $category1['description']."</br>";
    ?>
    
</body>
</html>