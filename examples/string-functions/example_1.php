<?php

if (str_contains('I don\'t want to use foo no more!', 'foo')) { // better than if (strpos('..', '..') !== false)
    echo "it contains foo";
} else {
    echo "it does not contain foo";
}

