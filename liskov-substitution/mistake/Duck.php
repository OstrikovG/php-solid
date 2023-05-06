<?php

require_once 'Bird.php';

class Duck extends Bird
{
    public function fly(): int
    {
        $flySpeed = 8;
        return $flySpeed;
    }

    public function swim(): int
    {
        $swimSpeed = 2;
        return $swimSpeed;
    }
}