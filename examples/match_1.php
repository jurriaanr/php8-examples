<?php

$foo = new DateTime();

// notice how class now works on the instance variable
echo match ($foo::class) {
    stdClass::class => "It's a generic object",
    DateTimeImmutable::class => "It's an immutable date",
    DateTime::class => "It's an normal date",
}; // its an expression, needs to be closed with ;
