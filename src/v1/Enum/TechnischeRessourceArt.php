<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum TechnischeRessourceArt: string
{
    case STROMERZEUGUNG = 'STROMERZEUGUNG';
    case STROMVERBRAUCH = 'STROMVERBRAUCH';
    case SPEICHER = 'SPEICHER';
}
