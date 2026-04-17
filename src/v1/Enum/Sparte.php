<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Sparte: string
{
    case STROM = 'STROM';
    case GAS = 'GAS';
    case FERNWAERME = 'FERNWAERME';
    case NAHWAERME = 'NAHWAERME';
    case WASSER = 'WASSER';
    case ABWASSER = 'ABWASSER';
}
