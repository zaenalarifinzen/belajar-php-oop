<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
// $loginRequest->username = "zaenala";
$loginRequest->username = "";
$loginRequest->password = "1234";

try {
    validateLoginRequest($loginRequest);
    echo "Valid" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;

    var_dump($exception->getTrace());
    echo $exception->getTraceAsString();
} finally {
    echo "Error atau nggak saya akan dieksekusi";
}