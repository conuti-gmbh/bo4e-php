<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\ArtikelIdTyp;
use Conuti\BO4E\v1\Enum\ZahlerBlindarbeit;

class Netznutzungsabrechnungsdaten
{
    public function __construct(
        readonly ?string $artikelId = null,
        readonly ?ArtikelIdTyp $artikelIdTyp = null,
        readonly ?int $anzahl = null,
        readonly ?float $gemeinderabatt = null,
        readonly ?float $zuschlag = null,
        readonly ?float $abschlag = null,
        readonly ?Menge $singulaereBetriebsmittel = null,
        readonly ?Preis $preisSingulaereBetriebsmittel = null,
        readonly ?bool $abrechnungBlindarbeit = null,
        readonly ?ZahlerBlindarbeit $zahlerBlindarbeit = null,
        readonly ?bool $zahlerBlindarbeitLf = null,
        readonly ?bool $differenzDaten = null,
        readonly ?Zaehlzeitregister $zaehlzeiten = null,
    ) {
    }
}
