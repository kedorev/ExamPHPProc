<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 08/12/16
 * Time: 14:02
 */

include "include.php";

$names = getAllName();

?>

<html>
<?php include "head.php"?>
<body>
<div class="main">
    <?php
    include "header.php";
    if(isset($_GET['tooMushQuantities']))
    {
        echo "<div class=\"error\">La quantité diponible n'est pas suffisante pour votre commande</div>";
    }
    foreach ($names as $name)
    {
        generateProductTemplating($name);
    }
    ?>
</div>
</body>
</html>