<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Befestigungsart: string
{
    case STECKTECHNIK = 'STECKTECHNIK';
    case DREIPUNKT = 'DREIPUNKT';
    case HUTSCHIENE = 'HUTSCHIENE';
    case EINSTUTZEN = 'EINSTUTZEN';
    case ZWEISTUTZEN = 'ZWEISTUTZEN';
}
