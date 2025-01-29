<?php

use phpbergen\Attributes\Attributes\Serializer;
use phpbergen\Attributes\Entities\Product;
use phpbergen\Attributes\Entities\User;

require 'vendor/autoload.php';

$user = new User('PHP Bergen','php@bergen.no','123456');
$json = Serializer::serialize($user);
echo $json . PHP_EOL;

$product = new Product('007','PHP 8.4');
$json = Serializer::serialize($product);
echo $json . PHP_EOL;
