<?php

try {
    throw new \RuntimeException();
} catch (\RuntimeException) {
    echo "Something went wrong at runtime!";
} catch (\Throwable) {
    echo "Something else went wrong!";
}
