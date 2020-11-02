<?php

$a = [];

try {
    echo $a['unsetIndex'] ?? throw new Exception('Index not found');
} catch (Throwable $e) {
    echo $e->getMessage();
}

