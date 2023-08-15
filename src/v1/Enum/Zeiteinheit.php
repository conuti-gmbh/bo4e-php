<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

/**
 * Auflistung möglicher Einheiten zur Verwendung in zeitbezogenen Angaben.
 */
enum Zeiteinheit: string
{
    case SEKUNDE = 'SEKUNDE';
    case MINUTE = 'MINUTE';
    case STUNDE = 'STUNDE';
    case VIERTEL_STUNDE = 'VIERTEL_STUNDE';
    case TAG = 'TAG';
    case WOCHE = 'WOCHE';
    case MONAT = 'MONAT';
    case QUARTAL = 'QUARTAL';
    case HALBJAHR = 'HALBJAHR';
    case JAHR = 'JAHR';
}
