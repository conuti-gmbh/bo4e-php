<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Leistungstyp: string
{
    case ARBEITSPREIS_WIRKARBEIT = 'ARBEITSPREIS_WIRKARBEIT';
    case LEISTUNGSPREIS_WIRKLEISTUNG = 'LEISTUNGSPREIS_WIRKLEISTUNG';
    case ARBEITSPREIS_BLINDARBEIT_IND = 'ARBEITSPREIS_BLINDARBEIT_IND';
    case ARBEITSPREIS_BLINDARBEIT_KAP = 'ARBEITSPREIS_BLINDARBEIT_KAP';
    case GRUNDPREIS = 'GRUNDPREIS';
    case MEHRMINDERMENGE = 'MEHRMINDERMENGE';
    case MESSSTELLENBETRIEB = 'MESSSTELLENBETRIEB';
    case MESSDIENSTLEISTUNG = 'MESSDIENSTLEISTUNG';
    case MESSDIENSTLEISTUNG_INKL_MESSUNG = 'MESSDIENSTLEISTUNG_INKL_MESSUNG';
    case ABRECHNUNG = 'ABRECHNUNG';
    case KONZESSIONS_ABGABE = 'KONZESSIONS_ABGABE';
    case KWK_UMLAGE = 'KWK_UMLAGE';
    case OFFSHORE_UMLAGE = 'OFFSHORE_UMLAGE';
    case ABLAV_UMLAGE = 'ABLAV_UMLAGE';
    case REGELENERGIE_UMLAGE = 'REGELENERGIE_UMLAGE';
    case BILANZIERUNG_UMLAGE = 'BILANZIERUNG_UMLAGE';
    case AUSLESUNG_ZUSAETZLICH = 'AUSLESUNG_ZUSAETZLICH';
    case ABLESUNG_ZUSAETZLICH = 'ABLESUNG_ZUSAETZLICH';
    case ABRECHNUNG_ZUSAETZLICH = 'ABRECHNUNG_ZUSAETZLICH';
    case SPERRUNG = 'SPERRUNG';
    case ENTSPERRUNG = 'ENTSPERRUNG';
    case MAHNKOSTEN = 'MAHNKOSTEN';
    case INKASSOKOSTEN = 'INKASSOKOSTEN';
}
