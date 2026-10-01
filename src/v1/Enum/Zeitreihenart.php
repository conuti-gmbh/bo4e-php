<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Zeitreihenart: string
{
    case SUMMENZEITREIHE = 'SUMMENZEITREIHE';
    case UEBERFUEHRUNGSZEITREIHE = 'UEBERFUEHRUNGSZEITREIHE';
}
