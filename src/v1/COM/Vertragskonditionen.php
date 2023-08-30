<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Vertragskonditionen
{
    public function __construct(
        public ?string $netznutzungszahler,
        public ?string $netznutzungsvertrag,
        public ?Zeitraum $netznutzungsabrechnung,
        public ?bool $beinhaltetSingulaerGenutzteBetriebsmittel,
        public ?string $netznutzungsabrechnungsgrundlage,
        public ?string $netznutzungsabrechnungsvariante,
        public ?bool $haushaltskunde,
        public ?bool $abrechnungUeberNna,
        public ?Gemeinderabatt $gemeinderabatt,
        public ?string $startAbrechnungsjahr,
        public ?string $naechstenetznutzungsabrechnung,
        public ?int $abrechnungsintervall,
        public ?int $netznutzungsabrechnungIntervall,
        public ?Zeitraum $geplanteTurnusablesung,
        public ?string $beauftragungMsb,
        public ?Zeitraum $kuendigungsfrist,
        public ?string $kuendigungstermin,
    ) {
    }
}
