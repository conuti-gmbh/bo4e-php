<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Mengeneinheit;

class Menge
{
    public function __construct(
        readonly ?float $wert,
        readonly ?Mengeneinheit $einheit,
    ) {
    }
}
