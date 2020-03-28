<?php

class Logging {
    private $filePointer;
    const LOCAL_FOLDER = './temp/';
    private $folder;

    public function writeMessageToLogFile($message) {
        if ($this->checkIfPointerExist()) {
            $this->openLogFile();
        }

        $scriptName = $this->defineScriptName();

        $time = @date('[d/M/Y:H:i:s]');

        fwrite($this->filePointer, "$time ($scriptName) $message" . PHP_EOL);
    }

    private function checkIfPointerExist() {
        return !is_resource($this->filePointer);
    }

    private function openLogFile() {
        if ($this->getFolder()) {
            $logFile = $this->getFolder() . 'log.txt';
        } else {
            $logFile = self::LOCAL_FOLDER . 'log.txt';
        }

        $this->filePointer = fopen($logFile, 'a') or exit("Can't open $logFile");
    }

    private function defineScriptName() {
        return pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
    }

    public function closeLogFile() {
        fclose($this->filePointer);
    }


    public function getFolder() {
        return $this->folder;
    }

    public function setFolder($folder) {
        $this->folder = $folder;
    }

}