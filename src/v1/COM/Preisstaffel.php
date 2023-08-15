<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Preisstaffel
{
    public function __construct(
        readonly ?float $einheitspreis,
        readonly ?float $staffelgrenzeVon,
        readonly ?float $staffelgrenzeBis,
        readonly ?Sigmoidparameter $sigmoidparameter
    ) {
    }
}
