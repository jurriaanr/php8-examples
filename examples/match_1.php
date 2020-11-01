<?php

$foo = new DateTime();

// notice how class now works on the instance variable
$result = match ($foo::class) {
    stdClass::class => "It's a generic object",
    DateTimeImmutable::class => "It's an immutable date",
    DateTime::class => "It's an normal date",
}; // its an expression, needs to be closed with ;

echo $result . "\n\n";

$status = 404;

// trick do more expressive tests
echo match (true) {
    $status >= 100 && $status < 200  => 'Informational',
    $status >= 200 && $status < 300  => 'Success',
    $status >= 300 && $status < 400  => 'Redirection',
    $status >= 400 && $status < 500  => 'Client error',
    $status >= 500 && $status < 600  => 'Server error',
    default => throw new \Exception('Not a valid status'),
} . "\n\n";