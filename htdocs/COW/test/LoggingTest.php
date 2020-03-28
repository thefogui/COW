<?php

require_once("./../Logging.php");

class LoggingTest {

    function __construct() {
        echo "Starting test for class Logging\n";
        $log = new Logging();
        $log->setFolder("../temp/");

        $log->writeMessageToLogFile('Test message1');
        $log->writeMessageToLogFile('Test message2');
        $log->writeMessageToLogFile('Test message3');

        $log->closeLogFile();
    }
}