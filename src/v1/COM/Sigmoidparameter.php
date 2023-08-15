<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Sigmoidparameter
{
    public function __construct(
        readonly ?float $A,
        readonly ?float $B,
        readonly ?float $C,
        readonly ?float $D
    ) {
    }
}
