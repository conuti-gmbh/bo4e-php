<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\BeauftragungMsb;
use Conuti\BO4E\v1\Enum\Netznutzungsabrechnungsgrundlage;
use Conuti\BO4E\v1\Enum\Netznutzungsabrechnungsvariante;
use Conuti\BO4E\v1\Enum\Netznutzungsvertrag;
use Conuti\BO4E\v1\Enum\Netznutzungszahler;

class Vertragskonditionen
{
    public function __construct(
        readonly ?Netznutzungszahler $netznutzungszahler,
        readonly ?Netznutzungsvertrag $netznutzungsvertrag,
        readonly ?Zeitraum $netznutzungsabrechnung,
        readonly ?bool $beinhaltetSingulaerGenutzteBetriebsmittel,
        readonly ?Netznutzungsabrechnungsgrundlage $netznutzungsabrechnungsgrundlage,
        readonly ?Netznutzungsabrechnungsvariante $netznutzungsabrechnungsvariante,
        readonly ?bool $haushaltskunde,
        readonly ?bool $abrechnungUeberNna,
        readonly ?Gemeinderabatt $gemeinderabatt,
        readonly ?string $startAbrechnungsjahr,
        readonly ?string $naechstenetznutzungsabrechnung,
        readonly ?int $abrechnungsintervall,
        readonly ?int $netznutzungsabrechnungIntervall,
        readonly ?Zeitraum $geplanteTurnusablesung,
        readonly ?BeauftragungMsb $beauftragungMsb,
        readonly ?Zeitraum $kuendigungsfrist,
        readonly ?string $kuendigungstermin,
    ) {
    }
}
