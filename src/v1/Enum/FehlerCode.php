<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum FehlerCode: string
{
    case ID_UNBEKANNT = 'ID_UNBEKANNT';
    case ABSENDER_NICHT_ZUGEORDNET = 'ABSENDER_NICHT_ZUGEORDNET';
    case EMPFAENGER_NICHT_ZUGEORDNET = 'EMPFAENGER_NICHT_ZUGEORDNET';
    case GERAET_UNBEKANNT = 'GERAET_UNBEKANNT';
    case OBIS_UNBEKANNT = 'OBIS_UNBEKANNT';
    case REFERENZIERUNG_FEHLERHAFT = 'REFERENZIERUNG_FEHLERHAFT';
    case TUPEL_UNBEKANNT = 'TUPEL_UNBEKANNT';
    case ABSENDER_TUPEL_NICHT_ZUGEORDNET = 'ABSENDER_TUPEL_NICHT_ZUGEORDNET';
    case EMPFAENGER_TUPEL_NICHT_ZUGEORDNET = 'EMPFAENGER_TUPEL_NICHT_ZUGEORDNET';
    case VORKOMMA_ZU_VIELE_STELLEN = 'VORKOMMA_ZU_VIELE_STELLEN';
    case ZEITREIHE_UNVOLLSTAENDIG = 'ZEITREIHE_UNVOLLSTAENDIG';
    case REFERENZIERTES_TUPEL_UNBEKANNT = 'REFERENZIERTES_TUPEL_UNBEKANNT';
    case MARKTLOKATION_UNBEKANNT = 'MARKTLOKATION_UNBEKANNT';
    case MESSLOKATION_UNBEKANNT = 'MESSLOKATION_UNBEKANNT';
    case MELDEPUNKT_NICHT_MEHR_IM_NETZ = 'MELDEPUNKT_NICHT_MEHR_IM_NETZ';
    case ERFORDERLICHE_ANGABE_FEHLT = 'ERFORDERLICHE_ANGABE_FEHLT';
    case GESCHAEFTSVORFALL_ZURUECKGEWIESEN = 'GESCHAEFTSVORFALL_ZURUECKGEWIESEN';
    case ZEITINTERVALL_NEGATIV = 'ZEITINTERVALL_NEGATIV';
    case FORMAT_NICHT_EINGEHALTEN = 'FORMAT_NICHT_EINGEHALTEN';
    case GESCHAEFTSVORFALL_ABSENDER = 'GESCHAEFTSVORFALL_ABSENDER';
    case KONFIGURATIONSID_UNBEKANNT = 'KONFIGURATIONSID_UNBEKANNT';
    case SEGMENTWIEDERHOLUNG_UEBERSCHRITTEN = 'SEGMENTWIEDERHOLUNG_UEBERSCHRITTEN';
    case ANZAHLCODES_UEBERSCHRITTEN = 'ANZAHLCODES_UEBERSCHRITTEN';
    case ZEITANGABE_UNPLAUSIBEL = 'ZEITANGABE_UNPLAUSIBEL';
    case CODE_NICHT_ERLAUBT = 'CODE_NICHT_ERLAUBT';
    case OBJEKT_NICHT_GEFUNDEN = 'OBJEKT_NICHT_GEFUNDEN';
    case OBJEKT_NICHT_EINDEUTIG = 'OBJEKT_NICHT_EINDEUTIG';
}
