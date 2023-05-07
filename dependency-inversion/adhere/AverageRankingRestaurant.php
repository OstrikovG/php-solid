<?php

require_once 'IRestaurant.php';

class AverageRankingRestaurant implements IRestaurant
{
    public function getFood(): string
    {
        return 'soup, grilled chicken with ketchup and coffee';
    }
}