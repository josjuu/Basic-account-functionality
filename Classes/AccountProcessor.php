<?php
/**
 * User: Jos Mutter
 * Date: 09/10/2018
 */

class AccountProcessor
{
    public static $tableName = "account";
    public static $className = "User";

    /**
     * Registers a new user to the database.
     *
     * @param $username
     *      The username of the new user.
     * @param $email
     *      The email of the new user.
     * @param $firstname
     *      The firstname of the new user.
     * @param $infix
     *      The infix of the new user.
     * @param $surname
     *      The surname of the new user.
     * @param $password
     *      The password of the new user.
     * @param $passwordAgain
     *      The repeated version of password
     * @throws NotSetException
     *      Throws an exception if an important field is not set or is null.
     * @throws ConnectionFailedException
     *      Throws an exception if the connection failed.
     * @throws PasswordException
     *      Throws an exception if the password are not the same.
     */
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

    /**
     * Checks if the users information is correct.
     *
     * @param $email
     *      The email of the user.
     * @param $password
     *      The password of the user.
     * @throws ConnectionFailedException
     *      Throws an exception if it fails to connect to the database.
     * @throws NotSetException
     *      Throws an exception if the required fields are not set.
     */
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
        } catch (ConnectionFailedException $e) {
            throw $e;
        } catch (NullException $e) {
            throw new Exception("Email/password is incorrect.");
        }


        if (!password_verify($password, $dbUser["Password"])) {
            throw new Exception("Email/password is incorrect.");
        }
    }

    /**
     * Updates the users account.
     * TODO: Add change password
     *
     * @param $id
     *      The id of the user.
     * @param $email
     *      The new email of the user.
     * @param $username
     *      The new username of the user.
     * @param $firstname
     *      The new firstname of the user.
     * @param $infix
     *      The new infix of the user.
     * @param $surname
     *      The new surname of the user.
     * @throws Exception
     *      Throws an exception if anything goes wrong.
     */
    public static function account($id, $email, $username, $firstname, $infix, $surname)
    {
        $requiredFields = Array("email", "username", "id");

        foreach ($requiredFields as $requiredField) {
            if (IsNullOrEmptyString($$requiredField)) {
                throw new NotSetException("One of the required fields are not set.");
            }
        }

        try {
            $user = Db::getSingleRecord(self::$tableName, self::$className, $id);
        } catch (Exception $e) {
            throw $e;
        }

        $user["Email"] = $email;
        $user["Username"] = $username;
        $user["Firstname"] = $firstname;
        $user["Infix"] = $infix;
        $user["Surname"] = $surname;

        try {
            Db::updateRecord(self::$tableName, (object)$user);
        } catch (Exception $e) {
            throw $e;
        }
    }
}

function IsNullOrEmptyString($str)
{
    return (!isset($str) || trim($str) === '');
}