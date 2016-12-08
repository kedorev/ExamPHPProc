<!DOCTYPE html>
            <html>
            <head><meta charset="UTF-8"><meta charset="UTF-8"><link rel="stylesheet" href="
            css.css">
            </head>
            <body>
<header>
 <nav class="menu">
                    <ul id="menu-demo2">
                        <li><a href="\/">Accueil</a><li>
                    <a href=".php"></a>
                        <ul>
                 </ul>
                </li>
                 <li>
                    <a href="necron.php">necron</a>
                        <ul>
                 <li>
                    <a href="necron/guerrier.php">guerrier</a>
                </li>
                 <li>
                    <a href="necron/overlord.php">overlord</a>
                </li>
                 <li>
                    <a href="necron/specter.php">specter</a>
                </li>
                 </ul>
                </li>
                 <li>
                    <a href="SM.php">SM</a>
                        <ul>
                 <li>
                    <a href="SM/BloodAngels.php">BloodAngels</a>
                </li>
                 <li>
                    <a href="SM/BlackTemplar.php">BlackTemplar</a>
                </li>
                 </ul>
                </li>
                 <li>
                    <a href="Tau.php">Tau</a>
                        <ul>
                 <li>
                    <a href="Tau/Commander.php">Commander</a>
                </li>
                 </ul>
                </li>
                     </ul>
                </nav><div class="connexionUser">
    <?php
    if(isset($_SESSION['USER']))
    {
        echo "<p>Bienvenu " . $_SESSION['USER']."</p>";
        echo "<div id='logout'><a href='PHPCall/logout.php'>Deconnexion </a> </div>";
    }
    else
    {
        echo "<div id='login'><a href='login.php'>Connexion</a> </div>";
    }
    ?>
</div>
</header>
 </body>
            </html>