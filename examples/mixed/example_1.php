<?php

function foo(mixed $arg1): mixed {
    return $arg1;
}

echo foo(1) . " - " . gettype(foo(1));
echo "\n";
echo foo('hello') . " - " . gettype(foo('hello'));
echo "\n";
echo foo(1.90909) . " - " . gettype(foo(1.90909));;
