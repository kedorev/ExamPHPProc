*<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 08/12/16
 * Time: 14:22
 */

include "../constant.php";

session_start();
file_put_contents("User/".$_SESSION['USER'],$_SESSION['ORDER_REF'].":".$_SESSION['CART']);
session_unset();
header("Location: ".urlSite);
exit;