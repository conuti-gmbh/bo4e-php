<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Anfragegrund;
use Conuti\BO4E\v1\Enum\BDEWArtikelnummer;
use Conuti\BO4E\v1\Enum\Energieerfassung;
use DateTime;

class AuftragPosition
{
    public function __construct(
        public ?int $positionsnummer,
        public ?string $positionsnummerAngebot,
        public ?Energieerfassung $energieerfassung,
        public ?BDEWArtikelnummer $artikelnummer,
        public ?string $positionsbetrag,
        public ?DateTime $startdatum,
        public ?DateTime $enddatum,
        public ?string $istBestand,
        public ?string $obiskennzahl,
        public ?Anfragegrund $anfragegrund,
        public ?AllgemeineInformationen $allgemeineInformationen,
        public ?InfoAbweichung $infoAbweichung
    ) {
    }
}
