<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Mengeneinheit: string
{
    case W = 'W';
    case WH = 'WH';
    case KW = 'KW';
    case KWH = 'KWH';
    case KVARH = 'KVARH';
    case MW = 'MW';
    case MWH = 'MWH';
    case STUECK = 'STUECK';
    case KUBIKMETER = 'KUBIKMETER';
    case STUNDE = 'STUNDE';
    case TAG = 'TAG';
    case MONAT = 'MONAT';
    case JAHR = 'JAHR';
    case PROZENT = 'PROZENT';
    case ANZAHL = 'ANZAHL';
    case VAR = 'VAR';
    case KVAR = 'KVAR';
    case VARH = 'VARH';
    case KWHK = 'KWHK';
}
