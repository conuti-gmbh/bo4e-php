<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

/**
 * Gibt den Status eines Angebotes an.
 */
enum Angebotsstatus: string
{
    case KONZEPTION = 'KONZEPTION';
    case UNVERBINDLICH = 'UNVERBINDLICH';
    case VERBINDLICH = 'VERBINDLICH';
    case BEAUFTRAGT = 'BEAUFTRAGT';
    case UNGUELTIG = 'UNGUELTIG';
    case ABGELEHNT = 'ABGELEHNT';
    case NACHGEFASST = 'NACHGEFASST';
    case AUSSTEHEND = 'AUSSTEHEND';
    case ERLEDIGT = 'ERLEDIGT';
}
