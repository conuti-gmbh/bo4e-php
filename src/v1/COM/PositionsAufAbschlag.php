<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\AufAbschlagstyp;
use Conuti\BO4E\v1\Enum\Waehrungseinheit;

class PositionsAufAbschlag
{
    public function __construct(
        public ?string $bezeichnung,
        public ?string $beschreibung,
        public ?AufAbschlagstyp $aufAbschlagstyp,
        public ?float $aufAbschlagswert,
        public ?Waehrungseinheit $aufAbschlagswaehrung
    ) {
    }
}
