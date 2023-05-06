<?php

require_once 'FileLogger.php';
require_once 'DBLogger.php';
require_once 'Product.php';

$fileLogger = new FileLogger();
$dbLogger = new DBLogger();

$product = new Product($fileLogger);
$product->setPrice(10);

$product = new Product($dbLogger);
$product->setPrice(10);