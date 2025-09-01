<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Mengeneinheit;

class Preisstaffel
{
    public function __construct(
        readonly ?float $einheitspreis = null,
        readonly ?float $staffelgrenzeVon = null,
        readonly ?float $staffelgrenzeBis = null,
        readonly ?Sigmoidparameter $sigmoidparameter = null,
        readonly ?Mengeneinheit $einheit = null,
    ) {
    }
}
