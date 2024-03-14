<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\AufAbschlagstyp;
use Conuti\BO4E\v1\Enum\Waehrungseinheit;

class PositionsAufAbschlag
{
    public function __construct(
        readonly ?string $bezeichnung = null,
        readonly ?string $beschreibung = null,
        readonly ?AufAbschlagstyp $aufAbschlagstyp = null,
        readonly ?float $aufAbschlagswert = null,
        readonly ?Waehrungseinheit $aufAbschlagswaehrung = null,
    ) {
    }
}
