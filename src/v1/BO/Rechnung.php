<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Betrag;
use Conuti\BO4E\v1\COM\Gemeinderabatt;
use Conuti\BO4E\v1\COM\Rechnungsposition;
use Conuti\BO4E\v1\COM\Steuerbetrag;
use Conuti\BO4E\v1\COM\Zeitraum;

class Rechnung
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?bool $istSelbstausgestellt,
        public ?string $bearbeitungsdatum,
        public ?string $rechnungsdatum,
        public ?string $rechnungsstatus,
        public ?Zeitraum $vorlaeufigerAbrechnungszeitraum,
        public ?Zeitraum $rechnungsperiode,
        public ?string $rechnungstyp,
        public ?bool $istReverseCharge,
        public ?string $faelligkeitsdatum,
        public ?Betrag $gesamtbrutto,
        public ?Betrag $zuZahlen,
        public ?string $originalRechnungsnummer,
        public ?string $referenzNachrichtendatum,
        public ?string $referenzDokumentennummer,
        public ?string $referenzVorgaengerrechnung,
        public ?string $datumVorgaengerrechnung,
        public ?string $netzkonto,
        public ?Betrag $vorausgezahlt,
        public ?Gemeinderabatt $gemeinderabatt,
        public ?string $ausfuehrungsdatum,
        public ?string $sonderrechnungsart,
        /** @var Steuerbetrag[] */
        public array $steuerbetraege = [],
        /** @var Rechnungsposition[] */
        public array $rechnungspositionen = [],
    ) {
    }

    public function isSelbstAusgestellt(): bool
    {
        return true === $this->istSelbstausgestellt;
    }
}
