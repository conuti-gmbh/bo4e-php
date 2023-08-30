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
        public ?Netznutzungszahler $netznutzungszahler,
        public ?Netznutzungsvertrag $netznutzungsvertrag,
        public ?Zeitraum $netznutzungsabrechnung,
        public ?bool $beinhaltetSingulaerGenutzteBetriebsmittel,
        public ?Netznutzungsabrechnungsgrundlage $netznutzungsabrechnungsgrundlage,
        public ?Netznutzungsabrechnungsvariante $netznutzungsabrechnungsvariante,
        public ?bool $haushaltskunde,
        public ?bool $abrechnungUeberNna,
        public ?Gemeinderabatt $gemeinderabatt,
        public ?string $startAbrechnungsjahr,
        public ?string $naechstenetznutzungsabrechnung,
        public ?int $abrechnungsintervall,
        public ?int $netznutzungsabrechnungIntervall,
        public ?Zeitraum $geplanteTurnusablesung,
        public ?BeauftragungMsb $beauftragungMsb,
        public ?Zeitraum $kuendigungsfrist,
        public ?string $kuendigungstermin,
    ) {
    }
}
