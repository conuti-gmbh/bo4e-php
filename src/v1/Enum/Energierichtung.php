<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Energierichtung: string
{
    case AUSSPEISUNG = 'AUSSP';
    case EINSPEISUNG = 'EINSP';
}
