<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Erzeugungsart;

class Energieherkunft
{
    public function __construct(
        readonly ?Erzeugungsart $erzeugungsart,
        readonly ?float $anteilProzent,
    ) {
    }
}
