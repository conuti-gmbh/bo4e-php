<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Profilart;
use Conuti\BO4E\v1\Enum\Profilverfahren;

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
    ) {
    }
}
