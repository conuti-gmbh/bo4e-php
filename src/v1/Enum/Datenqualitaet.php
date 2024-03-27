<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Datenqualitaet: string
{
    case DATEN = 'DATEN';
    case ERWARTETE_DATEN = 'ERWARTETE_DATEN';
    case IM_SYSTEM_VORHANDENE_DATEN = 'IM_SYSTEM_VORHANDENE_DATEN';
    case INFORMATIVE_DATEN = 'INFORMATIVE_DATEN';
}
