<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Com\Zieladresse;
use Conuti\BO4E\v1\Com\Aussteller;
use Conuti\BO4E\v1\Com\ZertifikatsNutzer;
use Conuti\BO4E\v1\Enum\AenderungsmoeglichkeitKonfiguration;
use Conuti\BO4E\v1\Com\Schwellwert;

class WerteNachTyp2
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::WERTE_NACH_TYP2,
        readonly string $versionStruktur = '1',
        readonly ?string $konfigurationsprodukt = null,
        readonly ?string $messprodukt = null,
        readonly ?Zieladresse $zieladresse = null,
        readonly ?Aussteller $aussteller = null,
        readonly ?ZertifikatsNutzer $zertifikatsNutzer = null,
        readonly ?AenderungsmoeglichkeitKonfiguration $aenderungsmoeglichkeitKonfiguration = null,
        /** @var Schwellwert[] */
        readonly array $schwellwerte = [],
    ) {
    }
}
