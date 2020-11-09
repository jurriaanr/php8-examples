<?php

$a = ['a' => 1, 'b' => 2, 'c' => 3];

echo array_reduce(array_keys($a), function(int $acc, string $key) use ($a,) { // trailing comma in use
    return $acc + $a[$key];
}, 0);
