<?php

require_once 'IRestaurant.php';

class Eater
{
    private IRestaurant $restaurant;

    public function __construct(IRestaurant $restaurant)
    {
        $this->restaurant = $restaurant;
    }

    public function eat(): void
    {
        $food = $this->restaurant->getFood();
        printf("Today I will eat %s\n", $food);
    }
}