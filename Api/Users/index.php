<?php
include_once '../../Classes/Initializer.php';

if (isset($_POST['register-submit'])) {
    echo ResponseJson::createResponseMessage("records", $_POST);
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
        $data = Db::getAllRecords("locations", "Users");
    } catch (Exception $e) {
        $response = ResponseJson::createFailedResponseMessage($e->getMessage());
    }

    if (!isset($response)) {
        $response = ResponseJson::createResponseMessage("records", $data);
    }

    echo $response;
}