<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\HaeufigkeitSchaltzeit;
use Conuti\BO4E\v1\Enum\Schalthandlung;
use Conuti\BO4E\v1\Enum\UebermittelbarkeitSchaltzeit;

class Schaltzeit
{
    public function __construct(
        readonly ?string $code = null,
        readonly ?string $aenderungszeitpunkt = null,
        readonly ?HaeufigkeitSchaltzeit $haeufigkeit = null,
        readonly ?UebermittelbarkeitSchaltzeit $uebermittelbarkeit = null,
        readonly ?Schalthandlung $schalthandlung = null,
        readonly ?string $konfigurationsprodukt = null
    ) {
    }
}
