<?php

class Foo {
    // also show union types
    private null|DateTime $date;

    public function __construct(?DateTime $date = null) {
        $this->date = $date;
    }

    // also show union types
    public function getDate(): null|DateTime {
        return $this->date;
    }
}

$foo = new Foo();

// nullsafe, no error
echo ($foo->getDate()?->format('Y-m-d') ?? 'No date') . "\n";
// this will be a fatal error
echo ($foo->getDate()->format('Y-m-d') ?? 'No date') . "\n";

