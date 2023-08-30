<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use DateTime;

class AuftragPosition
{
    public function __construct(
        public ?int $positionsnummer,
        public ?string $positionsnummerAngebot,
        public ?string $energieerfassung,
        public ?string $artikelnummer,
        public ?string $positionsbetrag,
        public ?DateTime $startdatum,
        public ?DateTime $enddatum,
        public ?string $istBestand,
        public ?string $obiskennzahl,
        public ?string $anfragegrund,
        public ?AllgemeineInformationen $allgemeineInformationen,
        public ?InfoAbweichung $infoAbweichung
    ) {
    }
}
