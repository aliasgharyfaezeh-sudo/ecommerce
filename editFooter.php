<?php
    // $id=$_POST['id'];

    $id=$GLOBALS['urlArray'][3];
    $footer=factory::factory('modelFooter');

    $footer1=$footer->find($id);
    // $footer1=$x->fetch_assoc();
    ?>
    <form action="http://localhost/ecommerce1/updateFooter/" method="post">
        <input type="hidden" name="id" value=<?php echo $footer1['id'];?>>
        <input type="text" name="nameDesiner" value=<?php echo $footer1['nameDesiner'];?>>
        <input type="number" name="phoneNumber" value=<?php echo $footer1['phoneNumber'];?>>
        <input type="text" name="description" value=<?php echo $footer1['description'];?>>

        <button>update</button>
    </form>
    
</body>
</html>