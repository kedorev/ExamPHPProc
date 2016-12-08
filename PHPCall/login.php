<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 08/12/16
 * Time: 11:59
 */

session_start();
include "../constant.php";
var_dump($_SESSION);

if(isset($_POST['login']))
{
    echo "est";
    $_SESSION['USER'] = $_POST['login'];
    $path = "Location: ".urlSite;
    header($path);


}
else
{
    header("Location : ".urlSite."/login.php");
}
exit;