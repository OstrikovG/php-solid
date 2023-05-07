<?php

require_once 'Eater.php';
require_once 'HighRankingRestaurant.php';

$restaurant = new HighRankingRestaurant();
$eater = new Eater($restaurant);
$eater->eat();