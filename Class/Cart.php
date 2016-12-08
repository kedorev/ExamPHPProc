<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 08/12/16
 * Time: 14:47
 */

function addToCart($productName, $quantities)
{
    if(!isset($_SESSION['CART']) || $_SESSION['CART'] == null)
    {
        $_SESSION['CART'] = array();
        $_SESSION['ORDER_REF'] = defineOrderId();
    }
    $index = null;
    foreach ($_SESSION['CART'] as $key => $value)
    {
        //var_dump($value);
        if($value['name'] == $productName )
        {
            $index = $key;
        }
    }
    if($index == null) {
        array_push($_SESSION['CART'], array('name' => $productName, 'quantity' => $quantities));
    }
    else
    {
        $_SESSION['CART'][$index]['quantity'] += $quantities;
        //var_dump($_SESSION);
    }

}

function cartRender()
{
    if(isset($_SESSION['USER'])&& isset($_SESSION['CART']))
    {
        $total = 0;
        $cart = $_SESSION['CART'];
        $data = "<table><tr><td>Quantity</td><td>Name</td><td>Price U</td><td>Total</td></tr>";

        foreach ($cart as $product)
        {

            $data .= "<tr><td>".$product['quantity']. "</td><td>" .$product['name'].  "</td><td>" . getPriceByName($product['name'])."€</td><td> ".$product['quantity']*getPriceByName($product['name'])."€</td></tr>";
            $total += $product['quantity']*getPriceByName($product['name']);
        }
        $data .= "</table>
        <p>Total to pay : ".$total."</p>
        <br/>
        <p>To validate your order, check a paypal b paypal wih this id :".$_SESSION['ORDER_REF']."</p>
        <a href='https://www.paypal.com/' target='_blank'>Poceed to paiement</a>";


        return $data;
    }
}

function defineOrderId()
{
    return substr(md5(microtime()),rand(0,26),5);
}