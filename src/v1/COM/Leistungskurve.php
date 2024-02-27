<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\HaeufigkeitLeistungskurve;
use Conuti\BO4E\v1\Enum\UebermittelbarkeitLeistungskurve;

class Leistungskurve
{
    public function __construct(
        readonly ?string $code = null,
        readonly ?string $aenderungszeitpunkt = null,
        readonly ?HaeufigkeitLeistungskurve $haeufigkeit = null,
        readonly ?UebermittelbarkeitLeistungskurve $uebermittelbarkeit = null,
        readonly ?Schwellwert $schwellwert = null,
        readonly ?string $konfigurationsprodukt = null
    ) {
    }
}
