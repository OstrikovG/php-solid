<?php

require_once 'ISuperTransformer.php';

class Transformer implements ISuperTransformer
{
    public function toCar()
    {
        echo 'transform to car';
    }

    public function toPlane()
    {
        echo 'transform to plane';
    }

    public function toShip()
    {
        echo 'transform to ship';
    }
}