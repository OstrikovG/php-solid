<?php

class Product
{
    private Logger $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function setPrice(int $price): void
    {
        try {
            if (rand(0, 10) < 5) throw new Exception("Connection db error");
            printf("Save price in db: %s\n", $price);
        } catch (Exception $e) {
            $this->logger->log($e->getMessage());
        }
    }
}