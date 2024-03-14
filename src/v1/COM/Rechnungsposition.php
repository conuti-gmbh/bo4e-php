<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use DateTime;

class Rechnungsposition
{
    public function __construct(
        readonly ?Preis $einzelpreis = null,
        readonly ?string $lieferungBis = null,
        readonly ?string $lieferungVon = null,
        readonly ?Menge $positionsMenge = null,
        readonly ?int $positionsnummer = null,
        readonly ?string $artikelnummer = null,
        readonly ?Betrag $teilsummeNetto = null,
        readonly ?Steuerbetrag $teilsummeSteuer = null,
        readonly ?Menge $zeitbezogeneMenge = null,
        readonly ?Abschlag $abschlag = null,
        readonly ?Zuschlag $zuschlag = null,
        readonly ?Gemeinderabatt $gemeinderabatt = null,
        readonly ?float $gesamtZuAbschlagsbetrag = null,
        readonly ?float $korrekturfaktor = null,
        readonly ?DateTime $ausfuehrungsdatum = null,
    ) {
    }
}
