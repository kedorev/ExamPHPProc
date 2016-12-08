<?php

/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 07/12/16
 * Time: 14:40
 */
class Tools
{




    public static function addContent($name, $dataToAdd)
    {
        Tools::isFileAndExist($name);

        if (!is_writable($name))
        {
            throw new Exception("Can't override file.");
        }

        file_put_contents($name, $dataToAdd, FILE_APPEND);
    }



    public static function isFileAndExist($name)
    {
        if(!file_exists($name))
        {
            throw new Exception("File doesn't exist.");
        }

        if(is_dir($name))
        {
            throw new Exception("File is a folder.");
        }

        return true;
    }


    public static function createFile($name)
    {
        if(file_exists($name))
        {
            throw new Exception("File allready exist.");
        }
        file_put_contents($name, "");
    }




    public static function generatePage($content)
    {
        try {
            $data = "<?php include \"/" . urlGenerated . "/constant.php\" ;?>";

            $data .= "<!DOCTYPE html>
            <html>
            <head>";

            if (isset($metaData['encodage'])) {
                $data = $data . "<meta charset=\"" . $metaData['encodage'] . "\">";
            } else {
                $data = $data . "<meta charset=\"UTF-8\">";
            }
            if (isset($metaData['auteur'])) {
                $data = $data . "<meta name=\"author\" content=\"" . $metaData['auteur'] . "\">";
            } else {
                $data = $data . "<meta charset=\"UTF-8\">";
            }


            if (isset($metaData['title'])) {
                $data = $data . "<title>" . $metaData['title'] . "</title>";
            }
            $data = $data . "<link rel=\"stylesheet\" href=\"<?php echo urlGenerated; ?>/css.css\">
            </head>
            <body>";

            $data = $data . file_get_contents("Template/startHeader.php");
            $data = $data . file_get_contents("Temp/nav.php");
            $data = $data . file_get_contents("Template/closeHeader.php");

            $data = $data . $content . " </body>
            </html>";

            return $data;
        } catch(Exception $exception)
        {
            echo "<H1>UNE ERREUR EST SURVENUE !</H1>";
            echo $exception->getMessage();
        }
    }
}