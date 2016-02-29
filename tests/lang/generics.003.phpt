--TEST--
Generic type-hints without side-effects
--FILE--
<?php

class Generic<T> {}

class DoesExist {}

$c = new Generic<DoesNotExist>();

var_dump($c instanceof Generic);
var_dump($c instanceof Generic<DoesNotExist>);
var_dump($c instanceof Generic<DoesExist>);

?>
--EXPECT--
bool(true)
bool(true)
Fatal error: Class 'DoesNotExist' not found
