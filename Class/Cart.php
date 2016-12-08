<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 08/12/16
 * Time: 14:47
 */

function addToCart($productName, $quantities)
{
    var_dump($_SESSION);
    array_push($_SESSION['CART'], array($productName, $quantities));
}