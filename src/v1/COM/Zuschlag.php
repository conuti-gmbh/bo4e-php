<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Zuschlag
{
    public function __construct(
        public string $typ,
        public int|float $prozent
    ) {
    }
}
