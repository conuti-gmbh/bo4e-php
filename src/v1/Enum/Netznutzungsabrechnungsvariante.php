<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Netznutzungsabrechnungsvariante: string
{
    case ARBEITSPREIS_GRUNDPREIS = 'ARBEITSPREIS_GRUNDPREIS';
    case ARBEITSPREIS_LEISTUNGSPREIS = 'ARBEITSPREIS_LEISTUNGSPREIS';
}
