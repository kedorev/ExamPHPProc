<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 06/12/16
 * Time: 11:40
 */

include "Navigation.php";
include "Tools.php";
include "constant.php";



if(isset($_POST['pseudoCode']) && isset($_POST['pseudoCode'])) {
    try
    {
    $data = htmlspecialchars($_POST['Global']);
    $pseudoCode = htmlspecialchars($_POST['pseudoCode']);
    //preg_match("Title");


    $keywords = preg_split("/[\|]+/", $data);
    foreach ($keywords as $keyword) {
        $splitKeywords = preg_split("/[\:]+/", $keyword);
        $metaData[$splitKeywords[0]] = $splitKeywords[1];
    }


    $menu = htmlspecialchars($_POST['Menu']);


    $menuDatas = preg_split("/[\.]+/", $menu);

    //var_dump($menuDatas);
    echo "<br/>";
    foreach ($menuDatas as $menuData)
    {
        //var_dump($menuData);
        $subMenus = preg_split("/[\-]+/", $menuData);
        $subMenus[0] = preg_replace('/\s+/', '', $subMenus[0]);
        if($subMenus[0] != "")
        {
            $finalMenu[$subMenus[0]] = array();
            $skipFirst = true;
            foreach ($subMenus as $subMenu)
            {
                if(!$skipFirst)
                {
                    $subMenu = preg_replace('/\s+/', '', $subMenu);
                    array_push($finalMenu[$subMenus[0]],($subMenu));
                }
                else
                {
                    $skipFirst = false;
                }
            }
        }
    }

    //var_dump($finalMenu);
    Navigation::startNav();
    foreach ($finalMenu as  $key => $values)
    {
        Navigation::addStartMainCategory($key);
        foreach ($values as $value)
        {
            Navigation::addCategory($value, $key);
        }
        Navigation::addClosureMainCategory();
        //Navigation::addStartMainCategory($)
    }
    Navigation::closeNav();


    /**
     * Define new line, carriage return
     */
    $htmlPatern = array(
        0 => "/\n/",
        1 => "/\r/"

    );

    $htmlConverts = array(
        0 => "<br/>",
        1 => ""
    );

    $pseudoCode = preg_replace($htmlPatern, $htmlConverts, $pseudoCode);




    /**
     * Define HTML
     */
    $htmlPatern = array(
        0 => "/\~titre/",
        1 => "/\/titre/"

    );

    $htmlConverts = array(
        0 => "<h1>",
        1 => "</h1>"
    );

    $pseudoCode = preg_replace($htmlPatern, $htmlConverts, $pseudoCode);


    /**
     * Define CSS
     */
    $htmlPatern = array(
        0 => "/\~gras/",
        1 => "/\/gras/",
        2 => "/\~souligne/",
        3 => "/\/souligne/"

    );

    $htmlConverts = array(
        0 => "<span class=\"bold\">",
        1 => "</span>",
        2 => "<span class=\"underline\">",
        3 => "</span>"
    );

    $pseudoCode = preg_replace($htmlPatern, $htmlConverts, $pseudoCode);


    $htmlPatern = array(
        0 => "/\~tab/",
        1 => "/\/tab/",
        2 => "/\~\_/",
        3 => "/\/\_/",
        4 => "/\~\|/",
        5 => "/\/\|/"


    );

    $htmlConverts = array(
        0 => "<table>",
        1 => "</table>",
        2 => "<tr>",
        3 => "</tr>",
        4 => "<td>",
        5 => "</td>"
    );

    $pseudoCode = preg_replace($htmlPatern, $htmlConverts, $pseudoCode);


    file_put_contents(urlGenerated."/index.php",Tools::generatePage($pseudoCode));
    file_put_contents(urlGenerated."/css.css",file_get_contents("global.css"));

    Tools::createFile(urlGenerated . "/constant.php");
    Tools::addContent(urlGenerated . "/constant.php", file_get_contents("constant.php"));
    //var_dump($menuDatas);
    foreach ($finalMenu as $key => $values)
    {
        $folderName = urlGenerated."/".$key;
        if(!file_exists($folderName) or !is_dir($folderName))
        {
            mkdir($folderName);
        }
        //var_dump($folderName.".php");
        file_put_contents($folderName.".php",Tools::generatePage(""));
        foreach ($values as $value)
        {
            file_put_contents($folderName."/".$value.".php",Tools::generatePage(""));
        }
    }
    }
    catch (Exception $exception)
    {
        echo $exception->getMessage();
    }












}

