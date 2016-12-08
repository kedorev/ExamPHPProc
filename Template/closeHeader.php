<div class="connexionUser">
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
