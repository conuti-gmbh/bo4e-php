<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Vertragstatus: string
{
    public const IN_ARBEIT = 'IN_ARBEIT';
    public const UEBERMITTELT = 'UEBERMITTELT';
    public const ANGENOMMEN = 'ANGENOMMEN';
    public const AKTIV = 'AKTIV';
    public const ABGELEHNT = 'ABGELEHNT';
    public const WIDERRUFEN = 'WIDERRUFEN';
    public const STORNIERT = 'STORNIERT';
    public const GEKUENDIGT = 'GEKUENDIGT';
    public const BEENDET = 'BEENDET';
}
