<?php

use JetBrains\PhpStorm\Immutable;

// attributes only accept constant expressions as input arguments
#[ExampleAttribute("hello")]
// You can't use named params though! So @Route(path="/xx") wont be #[Route(path="/xx")] but #[Route("", "", "/xx")]
#[ExampleAttribute(DateTime::class)]
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
