<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 08/12/16
 * Time: 14:28
 */

include "../constant.php";
include "../Class/Cart.php";

session_start();
var_dump($_POST);/*
header("Location: ".urlSite."/listProduct.php");
exit;*/

addToCart($_POST['name'],$_POST['Quantity']);