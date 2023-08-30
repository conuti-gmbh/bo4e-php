<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Interface;

/**
 * Der Sperrstatus beschreibt, ob ein Zähler gesperrt ist oder nicht.
 */
interface Sperrstatus
{
    public const ENTSPERRT = 'ENTSPERRT';
    public const GESPERRT = 'GESPERRT';
}
