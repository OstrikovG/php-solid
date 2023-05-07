<?php

require_once 'IRestaurant.php';

class LowRankingRestaurant implements IRestaurant
{
    public function getFood(): string
    {
        return 'cold soup, fried chicken and tea';
    }
}