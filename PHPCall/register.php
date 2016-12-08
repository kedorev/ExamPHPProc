<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 08/12/16
 * Time: 14:33
 */

include "../constant.php";
include "../Class/User.php";

//var_dump($_POST);
if(isset($_POST['login']) && isset($_POST['motDePasse']) && isset($_POST['motDePasse2']))
{
    if($_POST['motDePasse'] != "" && $_POST['motDePasse'] === $_POST['motDePasse2'])
    {
        //if(emailExist($mail))
    }
}