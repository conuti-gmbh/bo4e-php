<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class Preisstaffel
{
    public function __construct(
        readonly ?float $einheitspreis = null,
        readonly ?float $staffelgrenzeVon = null,
        readonly ?float $staffelgrenzeBis = null,
        readonly ?Sigmoidparameter $sigmoidparameter = null,
    ) {
    }
}
