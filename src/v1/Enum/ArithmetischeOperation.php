<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum ArithmetischeOperation: string
{
    case ADDITION = 'ADDITION';
    case SUBTRAKTION = 'SUBTRAKTION';
    case DIVISION = 'DIVISION';
    case DIVIDEND = 'DIVIDEND';
    case MULTIPLIKATION = 'MULTIPLIKATION';
    case POSITIVWERT = 'POSITIVWERT';
}
