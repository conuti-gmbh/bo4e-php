<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\HaeufigkeitSchaltzeit;
use Conuti\BO4E\v1\Enum\Schalthandlung;
use Conuti\BO4E\v1\Enum\UebermittelbarkeitSchaltzeit;
use DateTime;

class Schaltzeit
{
    public function __construct(
        readonly ?string $code,
        readonly ?DateTime $aenderungszeitpunkt,
        readonly ?HaeufigkeitSchaltzeit $haeufigkeit,
        readonly ?UebermittelbarkeitSchaltzeit $uebermittelbarkeit,
        readonly ?Schalthandlung $schalthandlung
    ) {
    }
}
