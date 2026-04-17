<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum DefinitionsTyp: string
{
    case ZAEHLZEIT = 'ZAEHLZEIT';
    case SCHALTZEIT = 'SCHALTZEIT';
    case LEISTUNGSKURVEN = 'LEISTUNGSKURVEN';
}
