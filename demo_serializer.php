<?php

use phpbergen\Attributes\Attributes\Serializer;
use phpbergen\Attributes\Entities\User;

require 'vendor/autoload.php';

$user = new User('JD Lien','jd@example.com','pass123');
$json = Serializer::serialize($user);
echo $json . PHP_EOL;

