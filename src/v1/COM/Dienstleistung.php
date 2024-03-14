<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Dienstleistungstyp;

class Dienstleistung
{
    public function __construct(
        readonly ?Dienstleistungstyp $dienstleistungstyp = null,
        readonly ?string $bezeichnung = null,
    ) {
    }
}
