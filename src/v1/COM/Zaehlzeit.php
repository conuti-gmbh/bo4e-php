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
        public ?string $code,
        public ?HaeufigkeitZaehlzeit $haeufigkeit,
        public ?UebermittelbarkeitZaehlzeit $uebermittelbarkeitZaehlzeit,
        public ?ErmittlungLeistungsmaximum $ermittlungLeistungsmaximum,
        public ?bool $istBestellbar,
        public ?ZaehlzeitdefinitionTyp $typ,
        public ?string $beschreibungTyp,
    ) {
    }
}
