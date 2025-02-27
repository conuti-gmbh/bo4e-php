<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Lokationstyp: string
{
    case MALO = 'MALO';
    case MELO = 'MELO';
    case NELO = 'NELO';
    case TECHNISCHE_RESSOURCE = 'TECHNISCHE_RESSOURCE';
    case STEUERBARE_RESSOURCE = 'STEUERBARE_RESSOURCE';
    case TRANCHE = 'TRANCHE';
}
