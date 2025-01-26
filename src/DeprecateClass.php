<?php

namespace phpbergen\Attributes;

class DeprecateClass {
  #[\Deprecated]
  public const OLD_WAY = 'foo';

  #[\Deprecated]
  function test() {
  }

  #[\Deprecated("use test() instead")]
  function test2() {
  }
}

enum MyEnum {
  #[\Deprecated]
  case OldCase;
}

$class = new DeprecateClass();
$class->test();
$class->test2();
$foo = DeprecateClass::OLD_WAY;
$bar = MyEnum::OldCase;
call_user_func([$class, "test"]);
