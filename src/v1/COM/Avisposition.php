<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use DateTime;

class Avisposition
{
    public function __construct(
        readonly ?string $rechnungsNummer = null,
        readonly ?DateTime $rechnungsDatum = null,
        readonly ?bool $istStorno = null,
        readonly ?bool $istSelbstausgestellt = null,
        readonly ?Betrag $gesamtBrutto = null,
        readonly ?Betrag $zuZahlen = null,
        readonly ?string $referenz = null,
        /** @var Abweichung[] */
        readonly array $abweichung = [],
        /** @var Rueckmeldungsposition[] */
        readonly array $positionen = [],
    ) {
    }
}
