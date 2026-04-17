<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Netzebene: string
{
    case NSP = 'NSP';
    case MSP = 'MSP';
    case HSP = 'HSP';
    case HSS = 'HSS';
    case MSP_NSP_UMSP = 'MSP_NSP_UMSP';
    case HSP_MSP_UMSP = 'HSP_MSP_UMSP';
    case HSS_HSP_UMSP = 'HSS_HSP_UMSP';
    case HD = 'HD';
    case MD = 'MD';
    case ND = 'ND';
}
