<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 08/12/16
 * Time: 11:55
 */

function login()
{

}

function emailValid($mail)
{

}

function emailExist($mail)
{
    $emails = scandir(productPath);
    foreach ($emails as $email)
    {
        if($mail === $email)
        {
            return true;
        }
    }
    return false;
}


function loginForm()
{
    return "
<div>
    <form action=\"PHPCall/login.php\" method=\"post\">
        <fieldset>
            <p>
                <label for=\"login\">Identifiant :</label>
                <input type=\"text\" name=\"login\" id=\"login\" placeholder=\"Saisir votre identifiant ici.\" />
            </p>
            <p>
                <label for=\"password\">Mot de passe :</label>
                <input type=\"password\" name=\"motDePasse\" id=\"password\" value=\"\" />
                <input type=\"submit\" name=\"submit\" value=\"Login\" />
            </p>
        </fieldset>
    </form>
    <form action=\"PHPCall/register.php\" method=\"post\">
        <fieldset>
            <p>
                <label for=\"login\">User :</label>
                <input type=\"text\" name=\"login\" id=\"login\" placeholder=\"Saisir votre identifiant ici.\" />
            </p>
            <p>
                <label for=\"password\">Passeword :</label>
                <input type=\"password\" name=\"motDePasse\" id=\"password\" value=\"\" />
            </p>
            <p>
                <label for=\"password2\">Passeword :</label>
                <input type=\"password\" name=\"motDePasse2\" id=\"password2\" value=\"\" />
            </p>
            <p>
                <label for=\"mail\">Email :</label>
                <input type=\"text\" name=\"mail\" id=\"mail\" placeholder=\"Saisir votre email ici.\" />
            
                <input type=\"submit\" name=\"submit\" value=\"Register\" />
            </p>
        </fieldset>
    </form>
</div>";

}