<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum MesstechnischeEinordnung: string
{
    /** Z52: IMS */
    case IMS = 'IMS';

    /** Z53: KME_MME */
    case KME_MME = 'KME_MME';

    /** Z68: KEINE_MESSUNG */
    case KEINE_MESSUNG = 'KEINE_MESSUNG';
}
