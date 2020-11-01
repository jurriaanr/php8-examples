<?php

function foo(int $someParameter = 1, string $anotherParameter = 'default', string $finalParameter = ''): string
{
    return sprintf("%d / %s / %s", $someParameter, $anotherParameter, $finalParameter);
}

// set 3rd parameter
echo foo(finalParameter: "Hallo!");
