    <?php
    $x=category::select(["*"])->get();
    ?>
<form action="getProduct" method="post">
    <input type="text" name="name">
    <input type="number" name="price">
    <input type="text" name="description">
    <select name="category">
        <?php
        for($i=1;$i<=$x->num_rows;$i++){
        $product2=$x->fetch_assoc();
        ?>
            <option value="<?=  $product2['id'];?>">
            <?=  $product2['title'];?>
            </option> 

        <?php
            }
        ?>
    </select>
    <button>send</button>
</form>
    
</body>
</html>