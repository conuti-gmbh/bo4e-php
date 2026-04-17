<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Netznutzungszahler;
use Conuti\BO4E\v1\Enum\Netznutzungsvertrag;
use Conuti\BO4E\v1\Enum\Netznutzungsabrechnungsgrundlage;
use Conuti\BO4E\v1\Enum\Netznutzungsabrechnungsvariante;
use DateTime;
use Conuti\BO4E\v1\Enum\BeauftragungMsb;

class Vertragskonditionen
{
    public function __construct(
        readonly ?Netznutzungszahler $netznutzungszahler = null,
        readonly ?Netznutzungsvertrag $netznutzungsvertrag = null,
        readonly ?Zeitraum $netznutzungsabrechnung = null,
        readonly ?bool $beinhaltetSingulaerGenutzteBetriebsmittel = null,
        readonly ?Netznutzungsabrechnungsgrundlage $netznutzungsabrechnungsgrundlage = null,
        readonly ?Netznutzungsabrechnungsvariante $netznutzungsabrechnungsvariante = null,
        readonly ?bool $haushaltskunde = null,
        readonly ?bool $abrechnungUeberNna = null,
        readonly ?Gemeinderabatt $gemeinderabatt = null,
        readonly ?DateTime $startAbrechnungsjahr = null,
        readonly ?string $naechstenetznutzungsabrechnung = null,
        readonly ?int $abrechnungsintervall = null,
        readonly ?int $netznutzungsabrechnungIntervall = null,
        readonly ?Zeitraum $geplanteTurnusablesung = null,
        readonly ?BeauftragungMsb $beauftragungMsb = null,
        readonly ?Zeitraum $kuendigungsfrist = null,
        readonly ?Zeitraum $vertragslaufzeit = null,
        readonly ?string $kuendigungstermin = null,
        readonly ?Zeitraum $abschlagszyklus = null,
        readonly ?float $anzahl_abschlaege = null,
        readonly ?string $beschreibung = null,
        readonly ?Zeitraum $vertragsverlaengerung = null,
    ) {
    }
}
