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
        readonly ?int $positionsnummer,
        readonly ?string $positionsnummerAngebot,
        readonly ?Energieerfassung $energieerfassung,
        readonly ?BDEWArtikelnummer $artikelnummer,
        readonly ?string $positionsbetrag,
        readonly ?DateTime $startdatum,
        readonly ?DateTime $enddatum,
        readonly ?string $istBestand,
        readonly ?string $obiskennzahl,
        readonly ?Anfragegrund $anfragegrund,
        readonly ?AllgemeineInformationen $allgemeineInformationen,
        readonly ?InfoAbweichung $infoAbweichung,
        readonly ?DefinitionsTyp $definitionsTyp
    ) {
    }
}
