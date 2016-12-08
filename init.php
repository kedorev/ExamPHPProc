<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 08/12/16
 * Time: 11:16
 */

include "include.php";

$products = array();


array_push($products,array(
    'name'=>'Améthyste',
    'price'=>15,
    'quantity'=>7,
    'image'=> "http://minerama.fr/328-large_default/geode-d-amethyste-et-calcite-extra.jpg"
    ));

array_push($products,array(
    'name'=>'Calcite',
    'price'=>10,
    'quantity'=>13,
    'image'=> "http://minerama.fr/2147-large_default/calcite-orange-mexique.jpg"
    ));


foreach ($products as $product)
{
    addNewProduct($product['name']);
    addPrice($product['name'],$product['price']);
    addImage($product['name'],$product['image']);
}