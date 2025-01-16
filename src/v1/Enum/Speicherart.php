<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Speicherart: string
{
    case WASSERSTOFFSPEICHER = 'WASSERSTOFFSPEICHER';
    case PUMPSPEICHER = 'PUMPSPEICHER';
    case BATTERIESPEICHER = 'BATTERIESPEICHER';
    case SONSTIGE_SPEICHERART = 'SONSTIGE_SPEICHERART';
}
