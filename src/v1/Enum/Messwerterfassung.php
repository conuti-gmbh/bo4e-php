<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Messwerterfassung: string
{
    case FERNAUSLESBAR = 'FERNAUSLESBAR';
    case MANUELL_AUSGELESENE = 'MANUELL_AUSGELESENE';
}
