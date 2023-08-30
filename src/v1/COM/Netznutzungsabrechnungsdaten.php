<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Netznutzungsabrechnungsdaten
{
    public function __construct(
        public ?string $artikelId,
        public ?string $artikelIdTyp,
        public ?int $anzahl,
        public ?float $gemeinderabatt,
        public ?float $zuschlag,
        public ?float $abschlag,
        public ?Menge $singulaereBetriebsmittel,
        public ?Preis $preisSingulaereBetriebsmittel,
        public ?bool $abrechnungblindarbeit,
        public ?string $zahlerderblindarbeit,
        public ?bool $zahlerBlindarbeitLf
    ) {
    }
}
