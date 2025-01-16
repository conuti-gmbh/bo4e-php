<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Bemessungsgroesse: string
{
    case WIRKARBEIT_EL = 'WIRKARBEIT_EL';
    case LEISTUNG_EL = 'LEISTUNG_EL';
    case BLINDARBEIT_KAP = 'BLINDARBEIT_KAP';
    case BLINDARBEIT_IND = 'BLINDARBEIT_IND';
    case BLINDLEISTUNG_KAP = 'BLINDLEISTUNG_KAP';
    case BLINDLEISTUNG_IND = 'BLINDLEISTUNG_IND';
    case WIRKARBEIT_TH = 'WIRKARBEIT_TH';
    case LEISTUNG_TH = 'LEISTUNG_TH';
    case VOLUMEN = 'VOLUMEN';
    case VOLUMENSTROM = 'VOLUMENSTROM';
    case BENUTZUNGSDAUER = 'BENUTZUNGSDAUER';
    case ANZAHL = 'ANZAHL';
}
