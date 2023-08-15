<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Mengeneinheit;
use Conuti\BO4E\v1\Enum\Preisstatus;
use Conuti\BO4E\v1\Enum\Waehrungseinheit;

class Preis
{
    public function __construct(
        readonly null|int|float $wert,
        readonly ?Waehrungseinheit $einheit,
        readonly ?Mengeneinheit $bezugswert,
        readonly ?Preisstatus $status
    ) {
    }
}
