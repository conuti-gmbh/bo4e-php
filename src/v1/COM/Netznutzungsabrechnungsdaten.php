<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\ArtikelIdTyp;
use Conuti\BO4E\v1\Enum\ZahlerBlindarbeit;

class Netznutzungsabrechnungsdaten
{
    public function __construct(
        public ?string $artikelId,
        public ?ArtikelIdTyp $artikelIdTyp,
        public ?int $anzahl,
        public ?float $gemeinderabatt,
        public ?float $zuschlag,
        public ?float $abschlag,
        public ?Menge $singulaereBetriebsmittel,
        public ?Preis $preisSingulaereBetriebsmittel,
        public ?bool $abrechnungblindarbeit,
        public ?ZahlerBlindarbeit $zahlerderblindarbeit,
        public ?bool $zahlerBlindarbeitLf
    ) {
    }
}
