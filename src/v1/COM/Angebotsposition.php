<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\BDEWArtikelnummer;

class Angebotsposition
{
    public function __construct(
        readonly ?string $positionsbezeichung,
        readonly ?Menge $positionsmenge,
        readonly ?Preis $positionspreis,
        readonly ?Betrag $positionsbetrag,
        readonly ?string $preisschluesselstamm,
        readonly ?BDEWArtikelnummer $artikelnummer
    ) {
    }
}
