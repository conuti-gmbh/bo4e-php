<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Zeitreihentyp: string
{
    case EGS = 'EGS';
    case LGS = 'LGS';
    case NZR = 'NZR';
    case SES = 'SES';
    case SLS = 'SLS';
    case TES = 'TES';
    case TLS = 'TLS';
    case SLS_TLS = 'SLS_TLS';
    case SES_TES = 'SES_TES';
}
