--TEST--
Interfaces in generic types, and type-checks
--FILE--
<?php

class Box<T> {}

class HeadGear {}

class Hat extends HeadGear {}

interface Feline {}

class Cat implements Feline {}

$hat_box = new Box<Hat>();
$cat_box = new Box<Cat>();

var_dump($hat_box instanceof Box); // true
var_dump($cat_box instanceof Box); // true
var_dump($cat_box instanceof Box<Cat>); // true
var_dump($cat_box instanceof Box<Hat>); // false
var_dump($cat_box instanceof Box<Feline>); // true
var_dump($hat_box instanceof Box<HeadGear>); // true

?>
--EXPECT--
bool(true)
bool(true)
bool(true)
bool(false)
bool(true)
bool(true)
