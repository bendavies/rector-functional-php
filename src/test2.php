<?php

namespace App;

use function Functional\map;

map([1, 2, 3], fn(int $i): int => $i * 2);