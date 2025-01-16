<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum GrundlageVerringerungUmlagen: string
{
    case ERFUELLT_VORAUSSETZUNG_NACH_ENFG = 'ERFUELLT_VORAUSSETZUNG_NACH_ENFG';
    case ERFUELLT_NICHT_VORAUSSETZUNG_NACH_ENFG = 'ERFUELLT_NICHT_VORAUSSETZUNG_NACH_ENFG';
    case KEINE_ANGABE = 'KEINE_ANGABE';
}
