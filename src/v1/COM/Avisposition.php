<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use DateTime;

class Avisposition
{
    public function __construct(
        readonly ?string $rechnungsNummer,
        readonly ?DateTime $rechnungsDatum,
        readonly ?bool $istStorno,
        readonly ?bool $istSelbstausgestellt,
        readonly ?Betrag $gesamtBrutto,
        readonly ?Betrag $zuZahlen,
        readonly ?string $referenz,
        /** @var Abweichung[] */
        readonly array $abweichungen = [],
        /** @var Rueckmeldungsposition[] */
        readonly array $positionen = []
    ) {
    }
}
