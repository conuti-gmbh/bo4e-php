<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

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
        readonly int|float|null $gesamtZuAbschlagsbetrag
    ) {
    }

    public function isCustomArticleNumber(): bool
    {
        if (!$this->artikelnummer) {
            return false;
        }

        // i.e. 1-01-1
        return preg_match("/^[0-9]{1}-[0-9]{2}-[0-9]{1}$/", $this->artikelnummer)
            // i.e. 1-05-5-003
            || preg_match("/^[0-9]{1}-[0-9]{2}-[0-9]{1}-[0-9]{3}$/", $this->artikelnummer)
            // i.e. 1-01-2-AGS
            || preg_match("/^[0-9]{1}-[0-9]{2}-[0-9]{1}-[A-Z]{3}$/", $this->artikelnummer)
            // i.e. 1-01-2-AGS-KG
            || preg_match("/^[0-9]{1}-[0-9]{2}-[0-9]{1}-[A-Z]{3}-[A-Z]{2}$/", $this->artikelnummer)
            // i.e. 1-01-2-AGS-KG-Z
            || preg_match("/^[0-9]{1}-[0-9]{2}-[0-9]{1}-[A-Z]{3}-[A-Z]{2}-[A-Z]{1}$/", $this->artikelnummer);
    }
}
