<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Betrag;
use Conuti\BO4E\v1\COM\Gemeinderabatt;
use Conuti\BO4E\v1\COM\Rechnungsposition;
use Conuti\BO4E\v1\COM\Steuerbetrag;
use Conuti\BO4E\v1\COM\Zeitraum;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Energierichtung;
use Conuti\BO4E\v1\Enum\Rechnungsstatus;
use Conuti\BO4E\v1\Enum\Rechnungstyp;
use Conuti\BO4E\v1\Enum\SonderrechnungsArt;

class Rechnung
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::RECHNUNG,
        readonly string $versionStruktur = "1",
        readonly ?bool $istSelbstausgestellt = null,
        readonly ?string $bearbeitungsdatum = null,
        readonly ?string $rechnungsdatum = null,
        readonly ?Rechnungsstatus $rechnungsstatus = null,
        readonly ?Zeitraum $vorlaeufigerAbrechnungszeitraum = null,
        readonly ?Zeitraum $rechnungsperiode = null,
        readonly ?Rechnungstyp $rechnungstyp = null,
        readonly ?bool $istReverseCharge = null,
        readonly ?string $faelligkeitsdatum = null,
        readonly ?Betrag $gesamtbrutto = null,
        readonly ?Betrag $zuZahlen = null,
        readonly ?string $originalRechnungsnummer = null,
        readonly ?string $referenzNachrichtendatum = null,
        readonly ?string $referenzDokumentennummer = null,
        readonly ?string $referenzVorgaengerrechnung = null,
        readonly ?string $datumVorgaengerrechnung = null,
        readonly ?string $netzkonto = null,
        readonly ?Betrag $vorausgezahlt = null,
        readonly ?Gemeinderabatt $gemeinderabatt = null,
        readonly ?string $ausfuehrungsdatum = null,
        readonly ?SonderrechnungsArt $sonderrechnungsart = null,
        readonly ?Energierichtung $energierichtung = null,
        readonly ?string $beginnPeriodeBilanzierung = null,
        readonly ?string $endePeriodeNetznutzung = null,
        /** @var Steuerbetrag[] */
        readonly array $steuerbetraege = [],
        /** @var Rechnungsposition[] */
        readonly array $rechnungspositionen = [],
    ) {
    }
}
