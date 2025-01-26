<?php

/**
 * PHP 8.4 - #[\Deprecated] attribute was introduced.
 *
 * https://www.php.net/manual/en/class.deprecated.php
 */

#[\Deprecated]
function test() {
}

#[\Deprecated("use test() instead")]
function test2() {
}

#[\Deprecated("use test() instead", since: "2.4")]
function test3() {
}

#[\Deprecated(since: "2024-05-07")]
function test4() {
}


test();
test2();
test3();
test4();
call_user_func("test");
