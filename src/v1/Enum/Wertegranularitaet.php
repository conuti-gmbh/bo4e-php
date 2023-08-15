<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Wertegranularitaet: string
{
    case JAHR = 'JAEHRLICH';
    case HALBJAHR = 'HALBJAEHRLICH';
    case QUARTAL = 'QUARTALSWEISE';
    case MONAT = 'MONATLICH';
}
