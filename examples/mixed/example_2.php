<?php

class Foo {};

function foo(mixed $item): string {
    return gettype($item);
}

// matches type object
echo foo(new Foo());
