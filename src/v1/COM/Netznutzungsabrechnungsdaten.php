<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\ArtikelIdTyp;
use Conuti\BO4E\v1\Enum\ZahlerBlindarbeit;

class Netznutzungsabrechnungsdaten
{
    public function __construct(
        readonly ?string $artikelId,
        readonly ?ArtikelIdTyp $artikelIdTyp,
        readonly ?int $anzahl,
        readonly ?float $gemeinderabatt,
        readonly ?float $zuschlag,
        readonly ?float $abschlag,
        readonly ?Menge $singulaereBetriebsmittel,
        readonly ?Preis $preisSingulaereBetriebsmittel,
        readonly ?bool $abrechnungBlindarbeit,
        readonly ?ZahlerBlindarbeit $zahlerBlindarbeit,
        readonly ?bool $zahlerBlindarbeitLf,
        readonly ?Zaehlzeitregister $zaehlzeiten,
    ) {
    }
}
