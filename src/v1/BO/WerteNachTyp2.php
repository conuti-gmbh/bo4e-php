<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Aussteller;
use Conuti\BO4E\v1\COM\IPAdresseCLSDevice;
use Conuti\BO4E\v1\COM\Schwellwert;
use Conuti\BO4E\v1\COM\ZertifikatsNutzer;
use Conuti\BO4E\v1\COM\Zieladresse;
use Conuti\BO4E\v1\Enum\AenderungsmoeglichkeitKonfiguration;
use Conuti\BO4E\v1\Enum\BOTyp;

class WerteNachTyp2
{
    public function __construct(
        readonly BOTyp $boTyp,
        readonly string $versionStruktur,
        readonly ?string $konfigurationsprodukt,
        readonly ?string $messprodukt,
        readonly ?Zieladresse $zieladresse,
        readonly ?Aussteller $aussteller,
        readonly ?ZertifikatsNutzer $zertifikatsNutzer,
        readonly ?AenderungsmoeglichkeitKonfiguration $aenderungsmoeglichkeitKonfiguration,
        /** @var Schwellwert[] */
        readonly array $schwellwerte = []
    ) {
    }
}
