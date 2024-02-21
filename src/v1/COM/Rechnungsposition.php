<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use DateTime;

class Rechnungsposition
{
    public function __construct(
        readonly ?Preis $einzelpreis,
        readonly ?string $lieferungBis,
        readonly ?string $lieferungVon,
        readonly ?Menge $positionsMenge,
        readonly ?int $positionsnummer,
        readonly ?string $artikelnummer,
        readonly ?Betrag $teilsummeNetto,
        readonly ?Steuerbetrag $teilsummeSteuer,
        readonly ?Menge $zeitbezogeneMenge,
        readonly ?Abschlag $abschlag,
        readonly ?Zuschlag $zuschlag,
        readonly ?Gemeinderabatt $gemeinderabatt,
        readonly int|float|null $gesamtZuAbschlagsbetrag,
        readonly int|float|null $korrekturfaktor,
        readonly ?DateTime $ausfuehrungsdatum,
    ) {
    }
}
