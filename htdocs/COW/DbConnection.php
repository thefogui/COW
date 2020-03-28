<?php

include('utils.php');

class DbConnection {
    private $conn;
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $logFile;

    function __construct() {
        $this->connect();
        $this->logFile = openLoggingFile();
    }

    private function connect() {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=world", $this->username, $this->password);
            $this->setPDOErrorModeToException();
        } catch(PDOException $exception) {
            $messageToWrite = "Connection failed: " . $exception->getMessage();
            $this->logFile->writeMessageToLogFile($messageToWrite);
        }
    }

    private function setPDOErrorModeToException() {
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function searchHotels($keyWord) {
        $rows = null;
        $sql = '';

        try {
            $sql = $this->searchInCities($keyWord);
            $rows = $this->getQueryRows($sql);
            //$sql = $this->searchInCountries($keyWord);
            //$rows = $rows + $this->getQueryRows($sql);

        } catch (PDOException $exception) {
            $messageToWrite = "Query " . $sql;
            $this->logFile->writeMessageToLogFile($messageToWrite);
            $messageToWrite = "Can't execute query: " . $exception->getMessage();
            $this->logFile->writeMessageToLogFile($messageToWrite);
        }

        return $rows;
    }

    private function searchInCities($keyWord) {
        return 'SELECT 
                    c.id, c.name, c.country_code, c.district 
                FROM cities c 
                WHERE 
                    c.name = "' . $keyWord .'" 
                    OR 
                    c.country_code = "' .$keyWord . '"';
    }

    private function searchInCountries($keyWord) {
        return 'SELECT 
                    c.id, c.name, c.country_code, c.district 
                FROM 
                    countries c
                WHERE 
                    name = "' .$keyWord .'"
                OR 
                    c.region = "' .$keyWord .'"
                OR 
                    c.continent = "' .$keyWord . '"';
    }

    private function getQueryRows($sql) {
        return $this->conn->query($sql)->fetchAll();
    }

    public function disconnect() {
        $this->conn = null;
    }
}