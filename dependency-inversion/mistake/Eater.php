<?php

require_once 'LowRankingRestaurant.php';

class Eater
{
    public function eat(): void
    {
        $restaurant = new LowRankingRestaurant();
        $food = $restaurant->getFood();
        printf("Today I will eat %s\n", $food);
    }
}