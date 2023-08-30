<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Preisstaffel
{
    public function __construct(
        public ?float $einheitspreis,
        public ?float $staffelgrenzeVon,
        public ?float $staffelgrenzeBis,
        public ?Sigmoidparameter $sigmoidparameter
    ) {
    }
}
