    <?php
    $id=$GLOBALS['urlArray'][3];
    $id1=$id+0;
    // $product1=product::find($id1);
    // $product=product::where("id",$id1,"=")->get();

    // $categorytitle=category::find($product1['category']);
    // $product=product::select1(['id','name','price','description'])->with(['title'],'category','id','category','product_category')->where('id',$id,'=')->select3()->get();
    // $product=product::select1(['id','name','price','description'])->with(['title'],['category'])->where('id',$id,'=')->get();
    // $product=product::select1(['id','name','price','description'])->with(['title','id'],['category'])->where('id',$id,'=')->get();
    // $array=['category'=>['id','title','name']];
    $array=['category'=>['title']];
    // $fild=['id','name','price','description'];

    // $product=product::select1(['id','name','price','description'])->with($array)->where('id',$id,'=')->get();
    $product=product::select(['id','name','price','description'])->with($array)->where('id',$id,'=')->get();
    // $product=product::with($fild,$array)->where('id',$id,'=')->get();
    // $product=product::select1(['id','name','price','description'])->with('category')->where('id',$id,'=')->get();






    // $product=product::select1(['id','name','price','description'])->with(['title'],'category','id','category','product_category')->select3($id)->get();
    
    $product1=$product->fetch_assoc();
    // var_dump($product1);
    // $product1=product::select2(['title'])->select3();

    echo $product1['id']."</br>";
    echo $product1['name']."</br>";
    echo $product1['price']."</br>";
    echo $product1['product_category']."</br>";
    echo $product1['description']."</br>";
    ?>
    
</body>
</html>