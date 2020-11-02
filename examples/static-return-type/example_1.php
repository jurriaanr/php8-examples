<?php

class Foo
{
    public function test(): static
    {
        return new static();
    }
}

class Bar extends Foo {

}

$foo = new Foo();
var_dump($foo->test());

$bar = new Bar();
var_dump($bar->test());
