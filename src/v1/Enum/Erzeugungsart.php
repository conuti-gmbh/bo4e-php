<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Erzeugungsart: string
{
    case EEG = 'EEG';
    case KWK = 'KWK';
    case EEG_DV = 'EEG_DV';
    case KWK_DV = 'KWK_DV';
    case WIND = 'WIND';
    case SOLAR = 'SOLAR';
    case KERNKRAFT = 'KERNKRAFT';
    case WASSER = 'WASSER';
    case GEOTHERMIE = 'GEOTHERMIE';
    case BIOMASSE = 'BIOMASSE';
    case KOHLE = 'KOHLE';
    case GAS = 'GAS';
    case SONSTIGE = 'SONSTIGE';
    case SONSTIGE_EEG = 'SONSTIGE_EEG';
    case SONSTIGE_ERZEUGUNGSART = 'SONSTIGE_ERZEUGUNGSART';
}
