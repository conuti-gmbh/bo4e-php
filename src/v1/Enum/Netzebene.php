<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Netzebene: string
{
    /** Niederspannung */
    case NSP = 'NSP';

    /** Mittelspannung */
    case MSP = 'MSP';

    /** Hochspannung */
    case HSP = 'HSP';

    /** Hoechstspannung */
    case HSS = 'HSS';

    /** MS/NS Umspannung */
    case MSP_NSP_UMSP = 'MSP_NSP_UMSP';

    /** HS/MS Umspannung */
    case HSP_MSP_UMSP = 'HSP_MSP_UMSP';

    /** HOES/HS Umspannung */
    case HSS_HSP_UMSP = 'HSS_HSP_UMSP';

    /** Hochdruck */
    case HD = 'HD';

    /** Mitteldruck */
    case MD = 'MD';

    /** Niederdruck */
    case ND = 'ND';
}
