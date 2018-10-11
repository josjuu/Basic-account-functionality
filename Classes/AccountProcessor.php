<?php
/**
 * User: Jos Mutter
 * Date: 09/10/2018
 */

class AccountProcessor
{
    public static function register($username, $email, $firstname, $infix, $lastname, $password, $passwordAgain)
    {
        $requiredFields = Array("username", "email", "password");
        echo $$username;
    }
}