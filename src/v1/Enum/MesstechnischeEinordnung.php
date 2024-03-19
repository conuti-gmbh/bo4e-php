<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum MesstechnischeEinordnung: string
{
    case IMS = 'IMS';
    case KME_MME = 'KME_MME';
    case KEINE_MESSUNG = 'KEINE_MESSUNG';
}
