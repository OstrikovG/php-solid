<?php

require_once 'Bird.php';
require_once 'BirdRun.php';
require_once 'Duck.php';
require_once 'Penguin.php';

$bird = new Penguin();
$birdRun = new BirdRun($bird);
$birdRun->run();
