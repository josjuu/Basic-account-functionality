<?php
/**
 * User: Jos Mutter
 * Date: 09/10/2018
 */

class AccountProcessor
{
    public static function register($username, $email, $firstname, $infix, $surname, $password, $passwordAgain)
    {
        $requiredFields = Array("username", "email", "password");

        foreach ($requiredFields as $requiredField) {
            if (IsNullOrEmptyString($$requiredField)) {
                throw new NotSetException("One of the required fields are not set.");
            }
        }

        if ($password != $passwordAgain) {
            throw new PasswordException("The password and repeat password are not the same.");
        }

        $user = new User();
        $user->Username = $username;
        $user->Email = $email;
        $user->Firstname = $firstname;
        $user->Infix = $infix;
        $user->Surname = $surname;
        $user->Password = password_hash($password, PASSWORD_BCRYPT);

        try {
            Db::addRecord("account", $user);
        } catch (ConnectionFailedException $e) {
            throw $e;
        }
    }
}

function IsNullOrEmptyString($str)
{
    return (!isset($str) || trim($str) === '');
}