<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Waehrungseinheit;
use Conuti\BO4E\v1\Enum\Mengeneinheit;
use Conuti\BO4E\v1\Enum\Preisstatus;

class Preis
{
    public function __construct(
        readonly ?float $wert = null,
        readonly ?Waehrungseinheit $einheit = null,
        readonly ?Mengeneinheit $bezugswert = null,
        readonly ?Preisstatus $status = null,
    ) {
    }
}
