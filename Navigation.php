<?php

/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 07/12/16
 * Time: 15:25
 */
class Navigation
{

    static $navTemp = "Temp/nav.php";

    public static function addStartMainCategory($catName)
    {
        $data = "<li>
                    <a href=\"<?php echo urlGenerated; ?>". $catName .".php\">$catName</a>
                        <ul>
                 ";

        file_put_contents(Navigation::$navTemp,$data,FILE_APPEND);
        //var_dump($catName);
    }

    public static function addCategory($catName, $mainCat)
    {
        $data = "<li>
                    <a href=\"/<?php echo urlGenerated; ?>". $mainCat . "/".$catName .".php\">$catName</a>
                </li>
                 ";

        file_put_contents(Navigation::$navTemp,$data,FILE_APPEND);
    }

    public static function addClosureMainCategory()
    {
        $data = "</ul>
                </li>
                 ";

        file_put_contents(Navigation::$navTemp,$data,FILE_APPEND);
    }


    public static function startNav()
    {
        $data =" <nav class=\"menu\">
                    <ul id=\"menu-demo2\">
                        <li><a href=\"/<?php echo urlGenerated; ?>\">Accueil</a>";

        file_put_contents(Navigation::$navTemp,$data);
    }
    public static function closeNav()
    {
        $data ="    </ul>
                </nav>";

        file_put_contents(Navigation::$navTemp,$data,FILE_APPEND);
    }
}