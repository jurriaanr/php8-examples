<?php

echo match (100) {
    '100' => 'You said 100',
    default => 'You definitely did not mean 100',
};
