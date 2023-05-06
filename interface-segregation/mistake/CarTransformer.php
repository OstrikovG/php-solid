<?php

require_once 'ISuperTransformer.php';

class CarTransformer implements ISuperTransformer
{
    public function toCar()
    {
        echo 'transform to car';
    }

    public function toPlane()
    {
        throw new Exception('Can`t transform to plane');
    }

    public function toShip()
    {
        throw new Exception('Can`t transform to ship');
    }
}