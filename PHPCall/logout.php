*<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 08/12/16
 * Time: 14:22
 */

include "../constant.php";

session_start();
session_unset();
header("Location: ".urlSite);
exit;