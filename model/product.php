<?php
class product extends model{
    protected static $tabel="product";
    protected static $related=['category'=>['category.id','product.category']];
    public static $base;
    // protected static $tabel="product";
}
