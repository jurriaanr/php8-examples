<?php

function foo(int $a, int $b, int $c,) {  // trailing comma
    echo $c;
}

echo foo(0,0,1,); // trailing comma

