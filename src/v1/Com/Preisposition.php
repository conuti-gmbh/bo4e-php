<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Kalkulationsmethode;
use Conuti\BO4E\v1\Enum\Leistungstyp;
use Conuti\BO4E\v1\Enum\Waehrungseinheit;
use Conuti\BO4E\v1\Enum\Mengeneinheit;
use Conuti\BO4E\v1\Enum\Zeiteinheit;
use Conuti\BO4E\v1\Enum\Tarifzeit;
use Conuti\BO4E\v1\Enum\BDEWArtikelnummer;
use Conuti\BO4E\v1\Enum\Bemessungsgroesse;
use Conuti\BO4E\v1\Enum\Netzebene;

class Preisposition
{
    public function __construct(
        readonly ?Kalkulationsmethode $berechnungsmethode = null,
        readonly ?Leistungstyp $leistungstyp = null,
        readonly ?string $leistungsbezeichnung = null,
        readonly ?Waehrungseinheit $preiseinheit = null,
        readonly ?Mengeneinheit $bezugsgroesse = null,
        readonly ?Zeiteinheit $zeitbasis = null,
        readonly ?Tarifzeit $tarifzeit = null,
        readonly ?BDEWArtikelnummer $bdewArtikelnummer = null,
        readonly ?Bemessungsgroesse $zonungsgroesse = null,
        readonly ?string $preisschluesselstamm = null,
        readonly ?int $positionsnummer = null,
        readonly ?Netzebene $messebene = null,
        readonly ?string $beschreibung = null,
        readonly ?Zeitraum $verarbeitungszeitraum = null,
        readonly ?string $artikelId = null,
        /** @var PositionsAufAbschlag[] */
        readonly array $zu_abschlaege = [],
        /** @var Preisstaffel[] */
        readonly array $preisstaffeln = [],
    ) {
    }
}
