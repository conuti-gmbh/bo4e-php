<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\AbschlagTyp;

class Abschlag
{
    public function __construct(
        public AbschlagTyp $typ,
        public int|float $prozent
    ) {
    }
}
