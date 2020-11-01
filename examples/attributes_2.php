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
class Foo {
    // apparently you still cant set a type on a constant??
    const BAR = 'BAR';

    public function getClassAttributes(): void {
        $refl = new ReflectionClass($this);
        $this->showAttributes($refl->getAttributes());
    }

    #[AnotherExample]
    #[AnotherExample(self::BAR)]
    public function getMethodAttributes(): void {
        $refl = new ReflectionClass($this);
        $this->showAttributes($refl->getMethod('getMethodAttributes')->getAttributes());
    }


    public function getParametersAttributes(#[ParamExample] string $name = ''): void {
        $refl = new ReflectionClass($this);
$this->showAttributes($refl->getMethod('getParametersAttributes')->getParameters()[0]->getAttributes());
}

private function showAttributes($atributes): void {
    var_dump(array_map(fn($a) => ['name' => $a->getName(), 'params' => $a->getArguments()], $atributes));
}
}

$foo = new Foo();
$foo->getClassAttributes();
echo "=================\n\n";
$foo->getMethodAttributes();
echo "=================\n\n";
$foo->getParametersAttributes();