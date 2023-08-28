<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Sperrauftragsart: string
{
    case SPERREN = 'SPERREN';
    case ENTSPERREN = 'ENTSPERREN';
}
