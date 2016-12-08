<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 08/12/16
 * Time: 12:23
 */

?>

<nav class="menu">
    <ul id="menu-demo2">
        <li><a href="<?php echo urlSite?>">Home</a>

        </li>
        <li><a href="listProduct.php">List product</a>
            <ul>
                <li><a href="amethyste.php">Amethyste</a></li>
            </ul>
        </li>
        <?php
            if(isset($_SESSION['USER']))
            {
                echo "<li><a href=\"user.php\">User</a>
                    <ul>
                        <li><a href=\"cart.php\">Cart information</a></li>
                        <li><a href=\"PHPCall/logout.php\">Logout</a></li>
                    </ul>
                </li>";
            }
            else
            {
                echo "<li><a href=\"login.php\">Login</a>";
            }
        if(isset($_SESSION['USER']))
        {
            if($_SESSION['USER'] == "admin")
            {
            echo "<li><a href=\"\">Admin</a>
                    <ul>
                        <li><a href=\"Admin/addProduct.php\">Add product</a></li>
                    </ul>
                </li>";
            }
        }
        ?>

    </ul>
</nav>
