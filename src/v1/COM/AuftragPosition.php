<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Anfragegrund;
use Conuti\BO4E\v1\Enum\BDEWArtikelnummer;
use Conuti\BO4E\v1\Enum\DefinitionsTyp;
use Conuti\BO4E\v1\Enum\Energieerfassung;
use DateTime;

class AuftragPosition
{
    public function __construct(
        readonly ?int $positionsnummer = null,
        readonly ?string $positionsnummerAngebot = null,
        readonly ?Energieerfassung $energieerfassung = null,
        readonly ?BDEWArtikelnummer $artikelnummer = null,
        readonly ?string $positionsbetrag = null,
        readonly ?DateTime $startdatum = null,
        readonly ?DateTime $enddatum = null,
        readonly ?string $istBestand = null,
        readonly ?string $obiskennzahl = null,
        readonly ?Anfragegrund $anfragegrund = null,
        readonly ?AllgemeineInformationen $allgemeineInformationen = null,
        readonly ?InfoAbweichung $infoAbweichung = null,
        readonly ?DefinitionsTyp $definitionsTyp = null,
    ) {
    }
}
