<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use DateTime;
use Conuti\BO4E\v1\Enum\HaeufigkeitSchaltzeit;
use Conuti\BO4E\v1\Enum\UebermittelbarkeitSchaltzeit;
use Conuti\BO4E\v1\Enum\Schalthandlung;

class Schaltzeit
{
    public function __construct(
        readonly ?string $code = null,
        readonly ?DateTime $aenderungszeitpunkt = null,
        readonly ?HaeufigkeitSchaltzeit $haeufigkeit = null,
        readonly ?UebermittelbarkeitSchaltzeit $uebermittelbarkeit = null,
        readonly ?Schalthandlung $schalthandlung = null,
        readonly ?string $konfigurationsprodukt = null,
    ) {
    }
}
