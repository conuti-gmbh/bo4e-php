<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Fernsteuerbarkeit: string
{
    case TECHNISCH_NICHT_FERNSTEUERBAR = 'TECHNISCH_NICHT_FERNSTEUERBAR';
    case TECHNISCH_FERNSTEUERBAR = 'TECHNISCH_FERNSTEUERBAR';
    case DURCH_LF_FERNSTEUERBAR = 'DURCH_LF_FERNSTEUERBAR';
}
