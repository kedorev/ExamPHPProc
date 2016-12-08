<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 08/12/16
 * Time: 15:46
 */

include "../../constant.php";
include "../../Class/products.php";

if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['image']))
{
    addNewProduct($_POST['name']);
    addPrice($_POST['name'],$_POST['price']);
    addImage($_POST['name'],$_POST['image']);
    addQuantity($_POST['name'],$_POST['quantity']);
}

header("Location : ".urlSite."/admin/addProduct.php");
exit;