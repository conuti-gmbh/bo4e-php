<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum ZaehlertypSpezifikation: string
{
    case EDL40 = 'EDL40';
    case EDL21 = 'EDL21';
    case SONSTIGER_EHZ = 'SONSTIGER_EHZ';
    case MME_STANDARD = 'MME_STANDARD';
    case MME_MEDA = 'MME_MEDA';
}
