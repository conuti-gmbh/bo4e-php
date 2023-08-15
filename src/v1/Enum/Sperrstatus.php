<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

/**
 * Der Sperrstatus beschreibt, ob ein Zähler gesperrt ist oder nicht.
 */
enum Sperrstatus: string
{
    case ENTSPERRT = 'ENTSPERRT';
    case GESPERRT = 'GESPERRT';
}
