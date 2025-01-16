<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Energieerfassung: string
{
    case SEPARAT_ERFASSEN = 'SEPARAT_ERFASSEN';
    case NICHT_SEPARAT_ERFASSEN = 'NICHT_SEPARAT_ERFASSEN';
}
