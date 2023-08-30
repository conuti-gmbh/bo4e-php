<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use DateTime;

class Avisposition
{
    public function __construct(
        public ?string $rechnungsNummer,
        public ?DateTime $rechnungsDatum,
        public ?bool $istStorno,
        public ?bool $istSelbsausgestellt,
        public ?Betrag $gesamtBrutto,
        public ?Betrag $zuZahlen,
        public ?string $referenz,
        /** @var Abweichung[] */
        public array $abweichungen = [],
        /** @var Rueckmeldungsposition[] */
        public array $positionen = []
    ) {
    }
}
