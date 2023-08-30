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
        public ?Kalkulationsmethode $berechnungsmethode,
        public ?Leistungstyp $leistungstyp,
        public ?string $leistungsbezeichnung,
        public ?Waehrungseinheit $preiseinheit,
        public ?Mengeneinheit $bezugsgroesse,
        public ?Zeiteinheit $zeitbasis,
        public ?Tarifzeit $tarifzeit,
        public ?BDEWArtikelnummer $bdewArtikelnummer,
        public ?Bemessungsgroesse $zonungsgroesse,
        public ?string $preisschluesselstamm,
        public ?int $positionsnummer,
        public ?Netzebene $messebene,
        public ?string $beschreibung,
        public ?Zeitraum $verarbeitungszeitraum,
        public ?string $artikelId,
        /** @var PositionsAufAbschlag[] */
        public array $zu_abschlaege = [],
        /** @var Preisstaffel[] */
        public array $preisstaffeln = []
    ) {
    }
}
