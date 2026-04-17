<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Preisart: string
{
    case EINRICHTUNGSPREIS = 'EINRICHTUNGSPREIS';
    case TRANSAKTIONSPREIS = 'TRANSAKTIONSPREIS';
    case BETRIEBSPREIS = 'BETRIEBSPREIS';
}
