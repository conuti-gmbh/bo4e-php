<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\ErmittlungLeistungsmaximum;
use Conuti\BO4E\v1\Enum\HaeufigkeitZaehlzeit;
use Conuti\BO4E\v1\Enum\UebermittelbarkeitZaehlzeit;
use Conuti\BO4E\v1\Enum\ZaehlzeitdefinitionTyp;

class Zaehlzeit
{
    public function __construct(
        readonly ?string $code = null,
        readonly ?HaeufigkeitZaehlzeit $haeufigkeit = null,
        readonly ?UebermittelbarkeitZaehlzeit $uebermittelbarkeit = null,
        readonly ?ErmittlungLeistungsmaximum $ermittlungLeistungsmaximum = null,
        readonly ?bool $istBestellbar = null,
        readonly ?ZaehlzeitdefinitionTyp $typ = null,
        readonly ?string $beschreibungTyp = null,
        readonly ?string $aenderungszeitpunkt = null,
        readonly ?string $register = null,
    ) {
    }
}
