<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Profilart;
use Conuti\BO4E\v1\Enum\Profilverfahren;

class Lastprofil
{
    public function __construct(
        readonly ?string $bezeichnung,
        readonly ?Profilverfahren $verfahren,
        readonly ?Profilart $profilart,
        readonly ?string $profilschar,
        readonly ?bool $einspeisung,
        readonly ?string $herausgeber,
        readonly ?Tagesparameter $tagesparameter
    ) {
    }
}
