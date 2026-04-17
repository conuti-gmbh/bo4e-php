<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Erzeugungsart;

class Energieherkunft
{
    public function __construct(
        readonly ?Erzeugungsart $erzeugungsart = null,
        readonly ?float $anteilProzent = null,
    ) {
    }
}
