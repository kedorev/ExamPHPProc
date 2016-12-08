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
    foreach ($names as $name)
    {
        generateProductTemplating($name);
    }
    ?>
</div>
</body>
</html>