<?php

$map = new WeakMap;
$obj = new stdClass;

// in a weakmap the key needs to be an object
$map[$obj] = 42;

var_dump($map);

$obj->txt = str_repeat(join("", range('a', 'z')), 100);

// The object is destroyed here, and the key is automatically removed from the weak map.
unset($obj);

var_dump($map);
