<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Betrag;
use Conuti\BO4E\v1\COM\Gemeinderabatt;
use Conuti\BO4E\v1\COM\Rechnungsposition;
use Conuti\BO4E\v1\COM\Steuerbetrag;
use Conuti\BO4E\v1\COM\Zeitraum;
use Conuti\BO4E\v1\Enum\Energierichtung;
use Conuti\BO4E\v1\Enum\Rechnungsstatus;
use Conuti\BO4E\v1\Enum\Rechnungstyp;
use Conuti\BO4E\v1\Enum\SonderrechnungsArt;

class Rechnung
{
    public function __construct(
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?bool $istSelbstausgestellt,
        readonly ?string $bearbeitungsdatum,
        readonly ?string $rechnungsdatum,
        readonly ?Rechnungsstatus $rechnungsstatus,
        readonly ?Zeitraum $vorlaeufigerAbrechnungszeitraum,
        readonly ?Zeitraum $rechnungsperiode,
        readonly ?Rechnungstyp $rechnungstyp,
        readonly ?bool $istReverseCharge,
        readonly ?string $faelligkeitsdatum,
        readonly ?Betrag $gesamtbrutto,
        readonly ?Betrag $zuZahlen,
        readonly ?string $originalRechnungsnummer,
        readonly ?string $referenzNachrichtendatum,
        readonly ?string $referenzDokumentennummer,
        readonly ?string $referenzVorgaengerrechnung,
        readonly ?string $datumVorgaengerrechnung,
        readonly ?string $netzkonto,
        readonly ?Betrag $vorausgezahlt,
        readonly ?Gemeinderabatt $gemeinderabatt,
        readonly ?string $ausfuehrungsdatum,
        readonly ?SonderrechnungsArt $sonderrechnungsart,
        readonly ?Energierichtung $energierichtung,
        readonly ?string $beginnPeriodeBilanzierung,
        readonly ?string $endePeriodeNetznutzung,
        /** @var Steuerbetrag[] */
        readonly array $steuerbetraege = [],
        /** @var Rechnungsposition[] */
        readonly array $rechnungspositionen = [],
    ) {
    }
}
