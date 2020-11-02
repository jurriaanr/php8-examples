<?php

class Foo
{
    public function test(): self
    {
        return new self();
    }
}

class Bar extends Foo {

}

$foo = new Foo();
var_dump($foo->test());

$bar = new Bar();
var_dump($bar->test());
