<?php

class Foo
{
    public function getParametersAttributes(#[ParamExample] string $name = ''): array {
        $refl = new ReflectionClass($this);
        $attributes = $refl->getMethod('getParametersAttributes')->getParameters()[0]->getAttributes();
        return array_map(fn($a) => ['name' => $a->getName(), 'params' => $a->getArguments()], $attributes);
    }
}

$foo = new Foo();
var_dump($foo->getParametersAttributes());
