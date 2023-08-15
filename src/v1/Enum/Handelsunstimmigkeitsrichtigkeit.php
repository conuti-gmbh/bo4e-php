<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Handelsunstimmigkeitsrichtigkeit: string
{
    case MSCONS = 'MSCONS';
    case UTILMD = 'UTILMD';
    case INVOIC = 'INVOIC';
    case ORDERS = 'ORDERS';
    case PRICAT = 'PRICAT';
    case IFTSTA = 'IFTSTA';
    case ORDCHG = 'ORDCHG';
}
