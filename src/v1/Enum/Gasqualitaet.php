<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Gasqualitaet: string
{
    /** High Caloric Gas */
    case H_GAS = 'H_GAS';

    /** Low Caloric Gas */
    case L_GAS = 'L_GAS';
}
