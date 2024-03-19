<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum BerichtStatus: string
{
    case ERFOLGREICH = 'ERFOLGREICH';
    case FEHLER = 'FEHLER';
}
