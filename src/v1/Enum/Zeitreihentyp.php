<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Zeitreihentyp: string
{
    /** Einspeisegangsumme */
    case EGS = 'EGS';

    /** Lastgangsumme */
    case LGS = 'LGS';

    /** Netzzeitreihe */
    case NZR = 'NZR';

    /** Standardeinspeiseprofilsumme */
    case SES = 'SES';

    /** Standardlastsumme */
    case SLS = 'SLS';

    /** Tagesparameterabhängige Einspeiseprofilsumme */
    case TES = 'TES';

    /** Tagesparameterabhängige Lastprofilsumme */
    case TLS = 'TLS';
    /** Gemeinsame Messung aus SLS und TLS */
    case SLS_TLS = 'SLS_TLS';
    /** Gemeinsame Messung aus SES und TES */
    case SES_TES = 'SES_TES';
}
