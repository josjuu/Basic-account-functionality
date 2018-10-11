<?php
/**
 * User: Jos Mutter
 * Date: 09/10/2018
 */

class AccountProcessor
{
    public static $tableName = "account";
    public static $className = "User";

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

        $user = new self::$className();
        $user->Username = $username;
        $user->Email = $email;
        $user->Firstname = $firstname;
        $user->Infix = $infix;
        $user->Surname = $surname;
        $user->Password = password_hash($password, PASSWORD_BCRYPT);

        try {
            Db::addRecord(self::$tableName, $user);
        } catch (ConnectionFailedException $e) {
            throw $e;
        }
    }

    public static function login($email, $password)
    {
        $requiredFields = Array("email", "password");

        foreach ($requiredFields as $requiredField) {
            if (IsNullOrEmptyString($$requiredField)) {
                throw new NotSetException("One of the required fields are not set.");
            }
        }

        try {
            $dbUser = Db::getSingleRecordByField(self::$tableName, self::$className, "Email", $email);
        } catch (Exception $e) {
            throw $e;
        }

        if (!password_verify($password, $dbUser["Password"])) {
            throw new PasswordException("Password was incorrect.");
        }
    }
}

function IsNullOrEmptyString($str)
{
    return (!isset($str) || trim($str) === '');
}