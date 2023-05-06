<?php

require_once 'Logger.php';
require_once 'Product.php';

$logger = new Logger();
$product = new Product($logger);
$product->setPrice(10);