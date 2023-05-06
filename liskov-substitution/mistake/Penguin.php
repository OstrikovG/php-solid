<?php

require_once 'Bird.php';

class Penguin extends Bird
{
    public function fly(): int
    {
//        throw new Exception('I can`t fly (((');
//        die('I can`t fly (((');
        return 'I can`t fly (((';
    }

    public function swim(): int
    {
        $swimSpeed = 4;
        return $swimSpeed;
    }
}