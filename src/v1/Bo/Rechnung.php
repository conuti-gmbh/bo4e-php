<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use DateTime;
use Conuti\BO4E\v1\Enum\Rechnungsstatus;
use Conuti\BO4E\v1\Com\Zeitraum;
use Conuti\BO4E\v1\Enum\Rechnungstyp;
use Conuti\BO4E\v1\Com\Betrag;
use Conuti\BO4E\v1\Com\Gemeinderabatt;
use Conuti\BO4E\v1\Enum\SonderrechnungsArt;
use Conuti\BO4E\v1\Enum\Energierichtung;
use Conuti\BO4E\v1\Com\Steuerbetrag;
use Conuti\BO4E\v1\Com\Rechnungsposition;

class Rechnung
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::RECHNUNG,
        readonly string $versionStruktur = '1',
        readonly ?bool $istSelbstausgestellt = null,
        readonly ?DateTime $bearbeitungsdatum = null,
        readonly ?DateTime $rechnungsdatum = null,
        readonly ?DateTime $faelligkeitsdatum = null,
        readonly ?Rechnungsstatus $rechnungsstatus = null,
        readonly ?Zeitraum $vorlaeufigerAbrechnungszeitraum = null,
        readonly ?Zeitraum $rechnungsperiode = null,
        readonly ?Rechnungstyp $rechnungstyp = null,
        readonly ?bool $istReverseCharge = null,
        readonly ?Betrag $gesamtbrutto = null,
        readonly ?Betrag $zuZahlen = null,
        readonly ?string $originalRechnungsnummer = null,
        readonly ?string $referenzNachrichtendatum = null,
        readonly ?string $referenzDokumentennummer = null,
        readonly ?string $referenzVorgaengerrechnung = null,
        readonly ?DateTime $datumVorgaengerrechnung = null,
        readonly ?string $netzkonto = null,
        readonly ?Betrag $vorausgezahlt = null,
        readonly ?Gemeinderabatt $gemeinderabatt = null,
        readonly ?DateTime $ausfuehrungsdatum = null,
        readonly ?SonderrechnungsArt $sonderrechnungsart = null,
        readonly ?Energierichtung $energierichtung = null,
        readonly ?DateTime $beginnPeriodeBilanzierung = null,
        readonly ?DateTime $endePeriodeNetznutzung = null,
        /** @var ?Steuerbetrag[] */
        readonly ?array $steuerbetraege = null,
        /** @var ?Rechnungsposition[] */
        readonly ?array $rechnungspositionen = null,
    ) {
    }
}
