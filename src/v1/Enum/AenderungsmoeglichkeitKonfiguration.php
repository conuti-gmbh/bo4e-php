<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum AenderungsmoeglichkeitKonfiguration: string
{
    case ERFORDERLICH = 'ERFORDERLICH';
    case NICHT_ERFORDERLICH = 'NICHT_ERFORDERLICH';
}
