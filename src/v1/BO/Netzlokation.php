<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Netznutzungsabrechnungsdaten;
use Conuti\BO4E\v1\COM\Zaehlwerk;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Lokationszuordnung;
use Conuti\BO4E\v1\Enum\Marktrolle;
use Conuti\BO4E\v1\Enum\Sparte;

class Netzlokation
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::NETZLOKATION,
        readonly string $versionStruktur = "1",
        readonly ?string $netzlokationsId = null,
        readonly ?Sparte $sparte = null,
        readonly ?string $netzanschlussleistung = null,
        readonly ?string $grundzustaendigerMSBCodeNr = null,
        readonly ?bool $steuerkanal = null,
        readonly ?Lokationszuordnung $lokationszuordnung = null,
        readonly ?Marktrolle $produktdatenRelevanteRolle = null,
        readonly ?Marktteilnehmer $auftraggebenderMarktpartner = null,
        readonly ?string $konfigurationsprodukt = null,
        readonly ?bool $keinKonfigurationsprodukt = null,
        readonly ?string $leistungskurvendefinition = null,
        /** @var Marktteilnehmer[] */
        readonly array $marktrollen = [],
        /** @var Zaehlwerk[] */
        readonly array $zaehlwerke = [],
        /** @var Netznutzungsabrechnungsdaten[] */
        readonly array $abrechnungsdaten = [],
    ) {
    }
}
