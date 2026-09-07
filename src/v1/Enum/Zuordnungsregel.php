<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Zuordnungsregel: string
{
    case SELBE_LIEFERRICHTUNG = 'SELBE_LIEFERRICHTUNG';
    case ENTGEGENGESETZTE_LIEFERRICHTUNG = 'ENTGEGENGESETZTE_LIEFERRICHTUNG';
}
