<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\HaeufigkeitZaehlzeit;

class AusgerollteZaehlzeit
{
    public function __construct(
        readonly ?string $aenderungszeitpunkt = null,
        readonly ?string $register = null,
        readonly ?HaeufigkeitZaehlzeit $haeufigkeit = null
    ) {
    }
}
