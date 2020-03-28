<?php

require_once("Logging.php");

function openLoggingFile() {
    return new Logging();
}

function beautifulVarDump($message) {
    echo '<pre>';
    var_dump($message);
    echo '</pre>';
}