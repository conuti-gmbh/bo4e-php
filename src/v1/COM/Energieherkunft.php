<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Energieherkunft
{
    public function __construct(
        public ?string $erzeugungsart,
        public ?float $anteilProzent,
    ) {
    }
}
