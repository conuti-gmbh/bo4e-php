<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\BDEWArtikelnummer;
use Conuti\BO4E\v1\Bo\Marktteilnehmer;

class Angebotsposition
{
    public function __construct(
        readonly ?string $positionsbezeichung = null,
        readonly ?Menge $positionsmenge = null,
        /** @var ?Preis[] */
        readonly ?array $positionspreis = null,
        readonly ?Betrag $positionsbetrag = null,
        readonly ?string $preisschluesselstamm = null,
        readonly ?BDEWArtikelnummer $artikelnummer = null,
        /** @var ?string[] */
        readonly ?array $artikelId = null,
        readonly ?bool $anbietbar = null,
        readonly ?string $freitext = null,
        readonly ?Katalogverweis $verweisKatalognummer = null,
        readonly ?Marktteilnehmer $beteiligterMarktpartner = null,
        /** @var ?string[] */
        readonly ?array $referenzMarktlokationsIds = null,
    ) {
    }
}
