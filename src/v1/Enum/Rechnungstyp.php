<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Rechnungstyp: string
{
    case ABSCHLUSSRECHNUNG = 'ABSCHLUSSRECHNUNG';
    case ABSCHLAGSRECHNUNG = 'ABSCHLAGSRECHNUNG';
    case TURNUSRECHNUNG = 'TURNUSRECHNUNG';
    case MONATSRECHNUNG = 'MONATSRECHNUNG';
    case WIMRECHNUNG = 'WIMRECHNUNG';
    case ZWISCHENRECHNUNG = 'ZWISCHENRECHNUNG';
    case INTEGRIERTE_13TE_RECHNUNG = 'INTEGRIERTE_13TE_RECHNUNG';
    case ZUSAETZLICHE_13TE_RECHNUNG = 'ZUSAETZLICHE_13TE_RECHNUNG';
    case MEHRMINDERMENGENRECHNUNG = 'MEHRMINDERMENGENRECHNUNG';
    case MSBRECHNUNG = 'MSBRECHNUNG';
    case KAPAZITAETSRECHNUNG = 'KAPAZITAETSRECHNUNG';
    case SPERRUNG_INBETRIEBNAHME = 'SPERRUNG_INBETRIEBNAHME';
    case VERZUGSKOSTEN = 'VERZUGSKOSTEN';
    case BLINDARBEIT = 'BLINDARBEIT';
    case SONDERRECHNUNG = 'SONDERRECHNUNG';
    case ABRECHNUNG_VON_KONFIGURATIONEN_UNIVERSALBESTELLPROZESS =
    'ABRECHNUNG_VON_KONFIGURATIONEN_UNIVERSALBESTELLPROZESS';
}
