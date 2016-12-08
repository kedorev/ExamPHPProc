<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 08/12/16
 * Time: 14:28
 */

include "../constant.php";
include "../Class/Cart.php";
include "../Class/products.php";

session_start();

if($_POST['Quantity'] > getQuantityByName($_POST['name']))
{
    header("Location: ".urlSite."/listProduct.php?tooMushQuantities=1");
    exit;
}
addToCart($_POST['name'],$_POST['Quantity']);
header("Location: ".urlSite."/listProduct.php");
exit;
