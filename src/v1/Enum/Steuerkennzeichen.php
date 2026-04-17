<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Steuerkennzeichen: string
{
    case UST_19 = 'UST_19';
    case UST_16 = 'UST_16';
    case UST_7 = 'UST_7';
    case VST_0 = 'VST_0';
    case VST_19 = 'VST_19';
    case VST_16 = 'VST_16';
    case VST_7 = 'VST_7';
    case RCV = 'RCV';
}
