<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Verfuegbarkeit: string
{
    case MONTAG = 'MONTAG';
    case DIENSTAG = 'DIENSTAG';
    case MITTWOCH = 'MITTWOCH';
    case DONNERSTAG = 'DONNERSTAG';
    case FREITAG = 'FREITAG';
    case PAUSE = 'PAUSE';
}
