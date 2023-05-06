<?php

class Logger
{
    public function log(string $message): void
    {
        $this->saveToFile($message);
    }

    private function saveToFile(string $message): void
    {
        printf("Save message to file: %s\n", $message);
    }
}