<?php
include_once '../../Classes/Initializer.php';


//if (isset($_POST['register-submit'])) {
//
////    AccountProcessor::register("1","2","3","4","5","6","7");
//} else if (isset($_GET["id"])) {
//    try {
//        $data = Db::getSingleRecord("locations", "Users", $_GET["id"]);
//    } catch (Exception $e) {
//        $response = ResponseJson::createFailedResponseMessage($e->getMessage());
//    }
//
//    if (!isset($response)) {
//        $response = ResponseJson::createResponseMessage("record", $data);
//    }
//
//    echo $response;
//} else {
//    try {
//        $data = Db::getAllRecords("users", "User");
//    } catch (Exception $e) {
//        $response = ResponseJson::createFailedResponseMessage($e->getMessage());
//    }
//
//    if (!isset($response)) {
//        $response = ResponseJson::createResponseMessage("records", $data);
//    }
//
//    echo $response;
//}

try {
    $f = new ReflectionMethod('AccountProcessor', 'register');
} catch (ReflectionException $e) {
}
$result = array();
foreach ($f-> as $param) {
    $result[] = $param->name;
}
print_r( $result);