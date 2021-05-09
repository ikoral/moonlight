<?php

// require MySQL Connection
require 'database/DBController.php';

// require Product Class
require 'database/Product.php';

//DBController object
$db = new DBController();

//Product Object
$product = new Product($db);

// $product->getData();

// print_r($product->getData());
