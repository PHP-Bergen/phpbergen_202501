<?php

/**
 * Use Reflection to detect deprecated functions and methods.
 */

#[\Deprecated]
function wine() {};

$reflection = new ReflectionFunction('wine');
var_dump($reflection->isDeprecated());

class Beer
{
  #[\Deprecated]
  const string TYPE = 'pils';

  #[\Deprecated]
  public function drink() {}
}
$reflection = new ReflectionClass(Beer::class);
$method = $reflection->getMethod('drink');
var_dump($method->isDeprecated());

$reflection = new ReflectionClassConstant(Beer::class, 'TYPE');
var_dump($reflection->isDeprecated());

/**
 * Calling a deprecated function emmit PHP Deprecated: Function wine().
 */
wine();
