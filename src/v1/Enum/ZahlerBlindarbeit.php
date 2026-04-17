<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum ZahlerBlindarbeit: string
{
    case ANSCHLUSSNUTZER = 'ANSCHLUSSNUTZER';
    case LIEFERANT = 'LIEFERANT';
    case NICHT_FESTGELEGT = 'NICHT_FESTGELEGT';
}
