<?php

require_once 'ICarTransformer.php';
require_once 'IShipTransformer.php';
require_once 'IPlaneTransformer.php';

interface ISuperTransformer extends ICarTransformer, IPlaneTransformer, IShipTransformer
{
    public function toCar();
    public function toPlane();
    public function toShip();
}