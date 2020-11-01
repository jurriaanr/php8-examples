<?php

$status = 404;

echo match (true) {
    $status >= 100 && $status < 200  => 'Informational',
    $status >= 200 && $status < 300  => 'Success',
    $status >= 300 && $status < 400  => 'Redirection',
    $status >= 400 && $status < 500  => 'Client error',
    $status >= 500 && $status < 600  => 'Server error',
    default => throw new \Exception('Not a valid status'),
};
