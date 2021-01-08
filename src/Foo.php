<?php

namespace App;

use function Functional\each;

class Foo
{
    public function foo()
    {
        each([1, 2, 3], fn(int $i): int => $i * 2);
    }
}

