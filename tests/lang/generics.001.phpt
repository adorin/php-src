--TEST--
Generic instanciation and type-checks
--FILE--
<?php

class Generic<T> {}

class Something {}

class AlsoSomething extends Something {}

class SomethingElse {}

$c = new Generic<Something>();

var_dump($c instanceof Generic);
var_dump($c instanceof Generic<Something>);
var_dump($c instanceof Generic<AlsoSomething>);
var_dump($c instanceof Generic<SomethingElse>);

?>
--EXPECT--
bool(true)
bool(true)
bool(true)
bool(false)
