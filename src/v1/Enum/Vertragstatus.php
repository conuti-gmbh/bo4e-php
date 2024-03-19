<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Vertragstatus: string
{
    case IN_ARBEIT = 'IN_ARBEIT';
    case UEBERMITTELT = 'UEBERMITTELT';
    case ANGENOMMEN = 'ANGENOMMEN';
    case AKTIV = 'AKTIV';
    case ABGELEHNT = 'ABGELEHNT';
    case WIDERRUFEN = 'WIDERRUFEN';
    case STORNIERT = 'STORNIERT';
    case GEKUENDIGT = 'GEKUENDIGT';
    case BEENDET = 'BEENDET';
}
