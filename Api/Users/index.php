<?php
include_once '../../Classes/Initializer.php';


if (isset($_POST['register-submit'])) {
    try {
        AccountProcessor::register($_POST["register-email"], $_POST["register-username"], $_POST["register-firstname"], $_POST["register-infix"], $_POST["register-surname"], $_POST["register-password"], $_POST["register-password-repeat"]);
    } catch (Exception $e) {
        echo ResponseJson::createFailedResponseMessage($e->getMessage());
    }
} else if (isset($_GET["id"])) {
    try {
        $data = Db::getSingleRecord("locations", "Users", $_GET["id"]);
    } catch (Exception $e) {
        $response = ResponseJson::createFailedResponseMessage($e->getMessage());
    }

    if (!isset($response)) {
        $response = ResponseJson::createResponseMessage("record", $data);
    }

    echo $response;
} else {
    try {
        $data = Db::getAllRecords("users", "User");
    } catch (Exception $e) {
        $response = ResponseJson::createFailedResponseMessage($e->getMessage());
    }

    if (!isset($response)) {
        $response = ResponseJson::createResponseMessage("records", $data);
    }

    echo $response;
}