<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\AufAbschlagstyp;
use Conuti\BO4E\v1\Enum\Waehrungseinheit;

class PositionsAufAbschlag
{
    public function __construct(
        readonly ?string $bezeichnung,
        readonly ?string $beschreibung,
        readonly ?AufAbschlagstyp $aufAbschlagstyp,
        readonly ?float $aufAbschlagswert,
        readonly ?Waehrungseinheit $aufAbschlagswaehrung
    ) {
    }
}
