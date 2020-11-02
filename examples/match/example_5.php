<?php

try {
    echo match (1) {
        2 => 4,
        3 => 6,
    };
} catch (Error $e) { // <-- notice, Error, not exception
    echo "The item was not matched! Error of type " . $e::class . ' thrown';
}