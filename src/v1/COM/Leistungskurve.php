<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\HaeufigkeitLeistungskurve;
use Conuti\BO4E\v1\Enum\UebermittelbarkeitLeistungskurve;
use DateTime;

class Leistungskurve
{
    public function __construct(
        readonly ?string $code,
        readonly ?DateTime $aenderungszeitpunkt,
        readonly ?HaeufigkeitLeistungskurve $haeufigkeit,
        readonly ?UebermittelbarkeitLeistungskurve $uebermittelbarkeit,
        readonly ?Schwellwert $schwellwert,
        readonly ?string $konfigurationsprodukt
    ) {
    }
}
