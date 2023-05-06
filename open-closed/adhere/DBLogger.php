<?php

require_once 'ILogger.php';

class DBLogger implements ILogger
{
    public function log(string $message): void
    {
        $this->saveToDB($message);
    }

    private function saveToDB(string $message): void
    {
        printf("Save message to database: %s\n", $message);
    }
}