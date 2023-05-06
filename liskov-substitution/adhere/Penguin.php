<?php

require_once 'Bird.php';

class Penguin extends Bird
{
    public function fly(): int
    {
        $flySpeed = 0;
        return $flySpeed;
    }

    public function swim(): int
    {
        $swimSpeed = 4;
        return $swimSpeed;
    }
}