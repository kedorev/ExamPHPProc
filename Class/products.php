<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 08/12/16
 * Time: 11:12
 */


function addNewProduct($name)
{
    addData($name,"name",$name);
}

function addData($name,$key,$value)
{
    if($key == "name")
    {
        if(file_exists(productPath.$name) && !is_dir(productPath.$name))
        {
            echo "Product allready exist";
        }
        else
        {
            var_dump(productPath.$name);
            file_put_contents(productPath.$name,$key.selector.$value."|");
        }
    }
    else
    {
        if(!file_exists(productPath.$name))
        {
            echo "Product doesn't exist";
        }
        else
        {
            file_put_contents(productPath.$name,$key.selector.$value."|", FILE_APPEND);
        }
    }
}


function addPrice($name,$price)
{
    addData($name,"price",$price);
}

function addQuantity($name,$quantity)
{
    addData($name,"quantity",$quantity);
}

function getAllName()
{
    $names = scandir(productPath);
    unset($names[0]);
    unset($names[1]);
    return $names;
}

function getPriceByName($name)
{
    return getDataByName($name,"price");
}

function addImage($name,$imageURL)
{
    addData($name,"image",$imageURL);
}


function generateProductTemplating($name)
{
    echo "<article class='product'>";
        echo "<div class='image'>";
            echo "<img src=\"". getImageURLBName($name) ."\">";
        echo "</div>";
        echo "<form action=\"PHPCall/addCart.php\" method=\"post\">
                <fieldset>
                    <H2>".$name."</H2>". getPriceByName($name). " €<br/> Quantity available : ".
                    getQuantityByName($name)
                    ."<p>
                        <input type=\"hidden\" name=\"name\" id=\"name\" value=\"".$name."\"/>
                        <label for=\"Quantity\">Quantity :</label>
                        <input type=\"text\" name=\"Quantity\" id=\"Quantity\" placeholder=\"How many products ?\"/>
                    </p>";
                    if(isset($_SESSION['USER']))
                        echo "<input type=\"submit\" name=\"submit\" value=\"Add to cart\" />";

                    echo "</p>
                </fieldset>
            </form>";
    echo "</article>";
}

function getDataByName($name,$dataSearch)
{
    if(!file_exists(productPath.$name))
    {
        echo "Product doen't exist";
    }
    else
    {
        $content = file_get_contents(productPath.$name);
        $datas = preg_split("/[|]+/", $content);
        foreach ($datas as $data)
        {
            $split = (preg_split("/[#]+/", $data));
            if($split[0] == $dataSearch){return $split[1];}
        }
    }
}

function getImageURLBName($name)
{
    return getDataByName($name,"image");
}

function getQuantityByName($name)
{
    return getDataByName($name,"quantity");
}
