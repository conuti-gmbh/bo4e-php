<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Berechnungsmethode;

class Tagesmitteltemperatur
{
    public function __construct(
        readonly ?Berechnungsmethode $berechnungTagesmitteltemperatur = null,
        readonly ?float $anteilA = null,
        readonly ?float $anteilB = null,
        readonly ?float $anteilC = null,
        readonly ?float $anteilD = null,
        readonly ?string $begrenzungstemperatur = null,
    ) {
    }
}
