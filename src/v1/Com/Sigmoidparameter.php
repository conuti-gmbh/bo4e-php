<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class Sigmoidparameter
{
    public function __construct(
        readonly ?float $A = null,
        readonly ?float $B = null,
        readonly ?float $C = null,
        readonly ?float $D = null,
    ) {
    }
}
