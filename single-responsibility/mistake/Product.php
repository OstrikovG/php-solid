<?php

class Product
{
    public function setPrice(int $price): void
    {
        try {
            if (rand(0, 10) < 5) throw new Exception("Connection db error");
            printf("Save price in db: %s\n", $price);
        } catch (Exception $e) {
            $this->log($e->getMessage());
        }
    }

    public function log(string $message): void
    {
        printf("Save message to file: %s\n", $message);
    }
}