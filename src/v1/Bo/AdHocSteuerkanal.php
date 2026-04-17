<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Com\Zieladresse;
use Conuti\BO4E\v1\Com\Aussteller;
use Conuti\BO4E\v1\Com\ZertifikatsNutzer;
use Conuti\BO4E\v1\Com\IPAdresseCLSDevice;

class AdHocSteuerkanal
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::AD_HOC_STEUERKANAL,
        readonly string $versionStruktur = '1',
        readonly ?string $konfigurationsprodukt = null,
        readonly ?Zieladresse $zieladresse = null,
        readonly ?Aussteller $aussteller = null,
        readonly ?ZertifikatsNutzer $zertifikatsNutzer = null,
        readonly ?IPAdresseCLSDevice $IPAdresseCLSDevice = null,
    ) {
    }
}
