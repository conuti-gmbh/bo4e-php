<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Interface;

interface Zeitreihentyp
{
    /** Einspeisegangsumme */
    public const EGS = 'EGS';

    /** Lastgangsumme */
    public const LGS = 'LGS';

    /** Netzzeitreihe */
    public const NZR = 'NZR';

    /** Standardeinspeiseprofilsumme */
    public const SES = 'SES';

    /** Standardlastsumme */
    public const SLS = 'SLS';

    /** Tagesparameterabhängige Einspeiseprofilsumme */
    public const TES = 'TES';

    /** Tagesparameterabhängige Lastprofilsumme */
    public const TLS = 'TLS';
    /** Gemeinsame Messung aus SLS und TLS */
    public const SLS_TLS = 'SLS_TLS';
    /** Gemeinsame Messung aus SES und TES */
    public const SES_TES = 'SES_TES';
}
