<?php

echo match (300) {
    100 => 'It is 100',
    200 => 'It is 200',
    200, 300 => 'It is either 200 or 300',
    300 => 'It is either 300',
};

echo "\n\n";

echo match (200) {
    100 => 'It is 100',
    200 => 'It is 200',
    200, 300 => 'It is either 200 or 300',
    300 => 'It is either 300',
};
