<?php

class Logger
{
    public function log(string $message): void
    {
        $this->saveToDB($message);
    }

    private function saveToFile(string $message): void
    {
        printf("Save message to file: %s\n", $message);
    }

    private function saveToDB(string $message): void
    {
        printf("Save message to database: %s\n", $message);
    }
}