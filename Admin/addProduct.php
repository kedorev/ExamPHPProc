<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 08/12/16
 * Time: 15:35
 */

session_start();
include "../constant.php";
if($_SESSION['USER'] != "admin")
{
    header("Location: ".urlSite);
}

?>



<html>
    <head>

    </head>
    <body>
    <a href="<?php echo urlSite;?>">Back to front office</a>
    <form action="PHPCall/addProduct.php" method="post" id="userform">
        <fieldset>

            <label for="name">Enter the product name: </label><BR/>
            <input type="text" form="userform" name="name" id="name"/>

            <br/>
            <label for="price">Enter the product price: </label><BR/>
            <input type="text" form="userform" name="price" id="price" />

            <br/>
            <label for="quantity">Enter the product quantity: </label><BR/>
            <input type="text" form="userform" name="quantity" id="quantity" />


            <br/>
            <label for="image">Enter image URL: </label><BR/>
            <input type="text" name="image" id="image" form="userform">


            <br/>
            <input type="submit" name="submit" value="Parse"  />
        </fieldset>
    </form>
    </body>
</html>