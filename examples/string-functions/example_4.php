<?php

echo (int)str_starts_with('haystack', 'hay') . "\n";
echo (int)str_ends_with('haystack', 'stack') . "\n";
echo (int)str_starts_with(' haystack', 'hay') . "\n"; // does not trim
echo (int)str_starts_with('Haystack', 'hay') . "\n"; // case sensitivity
echo (int)str_ends_with('😀😀😀', '😀') . "\n"; // multibyte
