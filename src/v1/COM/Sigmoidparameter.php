<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Sigmoidparameter
{
    public function __construct(
        public ?float $A,
        public ?float $B,
        public ?float $C,
        public ?float $D
    ) {
    }
}
