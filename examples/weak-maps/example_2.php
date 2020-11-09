<?php

$map = [];
$obj = new stdClass;

// in an array the key can't be an object
$map[42] = $obj;

var_dump($map);

$obj->txt = str_repeat(join("", range('a', 'z')), 100);

// The object is destroyed here, and the key is automatically removed from the weak map.
unset($obj);

var_dump($map);
