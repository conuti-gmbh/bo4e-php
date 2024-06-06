<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Tarifmerkmal: string
{
    case BAUSTROM = 'BAUSTROM';
    case FESTPREIS = 'FESTPREIS';
    case HAUSLICHT = 'HAUSLICHT';
    case HEIZSTROM = 'HEIZSTROM';
    case KOMBI = 'KOMBI';
    case ONLINE = 'ONLINE';
    case PAKET = 'PAKET';
    case STANDARD = 'STANDARD';
    case VORKASSE = 'VORKASSE';
}
