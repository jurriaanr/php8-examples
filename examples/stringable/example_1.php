<?php

class Foo {
    public function __toString(): string {
        return 'foo';
    }
}

function bar(string|Stringable $s): string {
    return $s . "\n";
}

echo bar('abc');
echo bar(new Foo());
