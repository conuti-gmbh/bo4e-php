<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Verwendungszeitraumqualitaet: string
{
    case IM_SYSTEM_VORHANDENE_DATEN = 'IM_SYSTEM_VORHANDENE_DATEN';
    case ERWARTETE_DATEN = 'ERWARTETE_DATEN';
    case GUELTIGE_DATEN = 'GUELTIGE_DATEN';
    case KEINE_DATEN = 'KEINE_DATEN';
    case IM_SYSTEM_KEINE_DATEN_VORHANDEN = 'IM_SYSTEM_KEINE_DATEN_VORHANDEN';
    case KEINE_DATEN_ERWARTET = 'KEINE_DATEN_ERWARTET';
}
