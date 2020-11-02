<?php

function foo(int $someArgument = 1, string $anotherArgument = 'default', string $finalArgument = ''): string
{
    return sprintf("%d / %s / %s", $someArgument, $anotherArgument, $finalArgument);
}

// set 3rd argument
echo foo(finalArgument: "Hallo!");
