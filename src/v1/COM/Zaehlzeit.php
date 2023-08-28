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
        readonly ?string $code,
        readonly ?HaeufigkeitZaehlzeit $haeufigkeit,
        readonly ?UebermittelbarkeitZaehlzeit $uebermittelbarkeitZaehlzeit,
        readonly ?ErmittlungLeistungsmaximum $ermittlungLeistungsmaximum,
        readonly ?bool $istBestellbar,
        readonly ?ZaehlzeitdefinitionTyp $typ,
        readonly ?string $beschreibungTyp,
    ) {
    }
}
