<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\BDEWArtikelnummer;

class Angebotsposition
{
    public function __construct(
        readonly ?string $positionsbezeichung = null,
        readonly ?Menge $positionsmenge = null,
        readonly ?Preis $positionspreis = null,
        readonly ?Betrag $positionsbetrag = null,
        readonly ?string $preisschluesselstamm = null,
        readonly ?BDEWArtikelnummer $artikelnummer = null,
        /** @var string[] */
        readonly array $artikelId = [],
    ) {
    }
}
