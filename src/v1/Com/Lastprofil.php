<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Profilverfahren;
use Conuti\BO4E\v1\Enum\Profilart;

class Lastprofil
{
    public function __construct(
        readonly ?string $bezeichnung = null,
        readonly ?Profilverfahren $verfahren = null,
        readonly ?Profilart $profilart = null,
        readonly ?string $profilschar = null,
        readonly ?bool $einspeisung = null,
        readonly ?string $herausgeber = null,
        readonly ?Tagesparameter $tagesparameter = null,
        readonly ?string $referenzprofilbezeichnung = null,
    ) {
    }
}
