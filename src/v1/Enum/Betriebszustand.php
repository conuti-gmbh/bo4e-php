<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Betriebszustand: string
{
    case GESPERRT_NICHT_ENTSPERREN = 'GESPERRT_NICHT_ENTSPERREN';
    case GESPERRT = 'GESPERRT';
    case REGELBETRIEB = 'REGELBETRIEB';
}
