<?php

require_once 'ICarTransformer.php';

class CarTransformer implements ICarTransformer
{
    public function toCar()
    {
        echo 'transform to car';
    }
}