<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\BDEWArtikelnummer;

class Angebotsposition
{
    public function __construct(
        public ?string $positionsbezeichung,
        public ?Menge $positionsmenge,
        public ?Preis $positionspreis,
        public ?Betrag $positionsbetrag,
        public ?string $preisschluesselstamm,
        public ?BDEWArtikelnummer $bdewArtikelnummer
    ) {
    }
}
