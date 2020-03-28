<?php

require_once("DbConnection.php");
require_once("utils.php");

define("MAX_STRING_LENGTH", 25);

function fetchHotels($keyWord) {
    $dbConnection = new DbConnection();

    return $dbConnection->searchHotels($keyWord);
}

#limit string to  25 characters.
function getSubString($str) {
    $str = substr($str, 0, MAX_STRING_LENGTH);

    return $str;
}

function removeStringPunctuations($str) {
    $str = preg_replace("/(?![.,])\p{P}/u", "", $str);

    return $str;
}

function formatStringUsingRegex($str) {
    $str = getSubString($str);
    $str = removeStringPunctuations($str);

    return $str;
}

function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email      = $_POST['email'];
    $place      = $_POST['place'];
    $startDate  = $_POST['startDate'];
    $endDate    = $_POST['endDate'];

    if (isValidEmail($email)) {
        $place = formatStringUsingRegex($place);

        $places = fetchHotels($place);

        foreach ($places as $place) {
            //TODO: display result beautifully
            beautifulVarDump($place);
        }

    } else {
        echo "Invalid Email";
    }
}