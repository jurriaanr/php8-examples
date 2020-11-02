<?php

class Foo {
    public function sayHello(?string $name): string {
        return $this->sayIt($name);
    }

    private function sayIt(?string $name): string {
        return 'Hello ' . ($name ?? 'John Doe') . '!';
    }
}

class Bar extends Foo {
    public function sayHello(?string $name): string {
        return $this->sayIt($name ?? 'John Doe');
    }

    // in PHP <8 this would not be allowed since the signature is different (not nullable)
    private function sayIt(string $name): string {
        return 'Hello ' . $name . '!';
    }
}

echo (new Bar())->sayHello('World');