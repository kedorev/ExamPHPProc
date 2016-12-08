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
        <li><a href="<?php echo urlSite?>">Accueil</a>

        </li>
        <li><a href="listProduct.php">Liste produit</a>
            <ul>
                <li><a href="listAme.php">Amethyste</a></li>
            </ul>
        </li>
        <?php
            if(isset($_SESSION['USER']))
            {
                echo "<li><a href=\"#\">User</a>
                    <ul>
                        <li><a href=\"#\">User information</a></li>
                        <li><a href=\"PHPCall/logout.php\">Logout</a></li>
                    </ul>
                </li>";
            }
            else
            {
                echo "<li><a href=\"login.php\">Login</a>";
            }
        ?>
    </ul>
</nav>
