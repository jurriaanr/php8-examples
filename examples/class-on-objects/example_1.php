<?php

namespace Foo;

class Bar {}

$bar = new Bar();

echo Bar::class . "\n";
echo $bar::class . "\n";
