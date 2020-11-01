<?php

class Foo
{
    // apparently you still cant set a type on a constant??
    const BAR = 'BAR';

    #[AnotherExample]
    #[AnotherExample(self::BAR)]
    public function getMethodAttributes(): array
    {
        $refl = new ReflectionClass($this);
        $attributes = $refl
            ->getMethod('getMethodAttributes')
            ->getAttributes();

        return array_map(fn($a) => ['name' => $a->getName(), 'params' => $a->getArguments()], $attributes);
    }
}

$foo = new Foo();
var_dump($foo->getMethodAttributes());