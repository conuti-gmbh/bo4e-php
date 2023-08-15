<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\BDEWArtikelnummer;
use Conuti\BO4E\v1\Enum\Bemessungsgroesse;
use Conuti\BO4E\v1\Enum\Kalkulationsmethode;
use Conuti\BO4E\v1\Enum\Leistungstyp;
use Conuti\BO4E\v1\Enum\Mengeneinheit;
use Conuti\BO4E\v1\Enum\Netzebene;
use Conuti\BO4E\v1\Enum\Tarifzeit;
use Conuti\BO4E\v1\Enum\Waehrungseinheit;
use Conuti\BO4E\v1\Enum\Zeiteinheit;

class Preisposition
{
    public function __construct(
        readonly ?Kalkulationsmethode $berechnungsmethode,
        readonly ?Leistungstyp $leistungstyp,
        readonly ?string $leistungsbezeichnung,
        readonly ?Waehrungseinheit $preiseinheit,
        readonly ?Mengeneinheit $bezugsgroesse,
        readonly ?Zeiteinheit $zeitbasis,
        readonly ?Tarifzeit $tarifzeit,
        readonly ?BDEWArtikelnummer $bdewArtikelnummer,
        readonly ?Bemessungsgroesse $zonungsgroesse,
        readonly ?string $preisschluesselstamm,
        readonly ?int $positionsnummer,
        readonly ?Netzebene $messebene,
        readonly ?string $beschreibung,
        readonly ?Zeitraum $verarbeitungszeitraum,
        readonly ?string $artikelId,
        /** @var PositionsAufAbschlag[] */
        readonly array $zu_abschlaege = [],
        /** @var Preisstaffel[] */
        readonly array $preisstaffeln = []
    ) {
    }
}
