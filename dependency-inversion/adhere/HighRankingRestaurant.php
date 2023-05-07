<?php

require_once 'IRestaurant.php';

class HighRankingRestaurant implements IRestaurant
{
    public function getFood(): string
    {
        return 'soup with oysters, grilled chicken with sauce hollandaise and wine';
    }
}