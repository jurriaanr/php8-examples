<?php

use JetBrains\PhpStorm\Immutable;

// attributes only accept constant expressions as input arguments
#[ExampleAttribute("hello")]
// You can also use named params. So @Route(path="/xx") will work
#[ExampleAttribute(DateTime::class, name: "SomeName")]
// calculate
#[ExampleAttribute(1+1)]
// there is no namespace checking
#[Oberon\Whatever\MyAnnotation]
// although it will use the imported namespaces
#[Immutable]
class Foo
{
    public function getClassAttributes(): array
    {
        $refl = new ReflectionClass($this);

        return array_map(
            fn($a) => [
                'name' => $a->getName(),
                'params' => $a->getArguments(),
            ],
            $refl->getAttributes()
        );
    }
}

$foo = new Foo();
var_dump($foo->getClassAttributes());
