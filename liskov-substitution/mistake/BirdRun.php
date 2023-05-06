<?php

require_once 'Bird.php';

class BirdRun
{
    private Bird $bird;

    public function __construct(Bird $bird)
    {
        $this->bird = $bird;
    }

    public function run(): void
    {
        $flySpeed = $this->bird->fly();
    }
}