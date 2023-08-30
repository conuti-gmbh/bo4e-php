<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Interface;

/**
 * Auflistung möglicher Einheiten zur Verwendung in zeitbezogenen Angaben.
 */
interface Zeiteinheit
{
    public const SEKUNDE = 'SEKUNDE';
    public const MINUTE = 'MINUTE';
    public const STUNDE = 'STUNDE';
    public const VIERTEL_STUNDE = 'VIERTEL_STUNDE';
    public const TAG = 'TAG';
    public const WOCHE = 'WOCHE';
    public const MONAT = 'MONAT';
    public const QUARTAL = 'QUARTAL';
    public const HALBJAHR = 'HALBJAHR';
    public const JAHR = 'JAHR';
}
