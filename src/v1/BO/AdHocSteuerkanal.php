<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Aussteller;
use Conuti\BO4E\v1\COM\IPAdresseCLSDevice;
use Conuti\BO4E\v1\COM\ZertifikatsNutzer;
use Conuti\BO4E\v1\COM\Zieladresse;
use Conuti\BO4E\v1\Enum\BOTyp;

class AdHocSteuerkanal
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::AD_HOC_STEUERKANAL,
        readonly string $versionStruktur = "1",
        readonly ?string $konfigurationsprodukt = null,
        readonly ?Zieladresse $zieladresse = null,
        readonly ?Aussteller $aussteller = null,
        readonly ?ZertifikatsNutzer $zertifikatsNutzer = null,
        readonly ?IPAdresseCLSDevice $IPAdresseCLSDevice = null,
    ) {
    }
}
