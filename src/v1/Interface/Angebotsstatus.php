<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Interface;

/**
 * Gibt den Status eines Angebotes an.
 */
interface Angebotsstatus
{
    public const KONZEPTION = 'KONZEPTION';
    public const UNVERBINDLICH = 'UNVERBINDLICH';
    public const VERBINDLICH = 'VERBINDLICH';
    public const BEAUFTRAGT = 'BEAUFTRAGT';
    public const UNGUELTIG = 'UNGUELTIG';
    public const ABGELEHNT = 'ABGELEHNT';
    public const NACHGEFASST = 'NACHGEFASST';
    public const AUSSTEHEND = 'AUSSTEHEND';
    public const ERLEDIGT = 'ERLEDIGT';
}
