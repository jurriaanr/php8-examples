<?php

if (str_contains('I don\'t want to use 😀 no more!', '😀')) { // it does
    echo "it contains 😀";
} else {
    echo "it does not contain 😀";
}
