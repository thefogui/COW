<?php

require_once('DbConnectionTest.php');
require_once('LoggingTest.php');
require_once('../utils.php');

echo "****Running tests\r\n";
echo "****Testing class DbConnection\r\n";
$dbCT = new DbConnectionTest();
$dbCT->testSearchHotels();

echo "****Testing class Logging\n";
$lTest = new LoggingTest();
