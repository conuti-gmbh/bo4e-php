<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Anfragegrund: string
{
    case ABGRENZUNG_VON_ENERGIEMENGEN = 'ABGRENZUNG_VON_ENERGIEMENGEN';
    case ABGRENZUNG = 'ABGRENZUNG';
    case WECHSELEREIGNIS = 'WECHSELEREIGNIS';
    case ZWISCHENABLESUNG = 'ZWISCHENABLESUNG';
}
