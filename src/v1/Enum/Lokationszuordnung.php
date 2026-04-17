<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Lokationszuordnung: string
{
    case UNVERAENDERT = 'UNVERAENDERT';
    case BEGINNT = 'BEGINNT';
    case ENDET = 'ENDET';
}
