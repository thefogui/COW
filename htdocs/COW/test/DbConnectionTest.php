<?php

include('./../DbConnection.php');

class DbConnectionTest {

    function __construct() {
        echo "Starting test for class DbConnection\r\n";
        $this->testConnection();
    }

    function testConnection() {
        echo "Testing connection method\r\n";

        $dbConnection = new DbConnection();
    }

    function testSearchHotels() {
        echo "Testing searchHotels method\n";

        $dbConnection = new DbConnection();
        $keyWord = 'Herat';

        $rows = $dbConnection->searchHotels($keyWord);
        beautifulVarDump($rows);

        $keyWord = 'He';

        $rows = $dbConnection->searchHotels($keyWord);
        beautifulVarDump($rows);
    }
}
