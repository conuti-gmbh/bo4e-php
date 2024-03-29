<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Handelsunstimmigkeitsgrund: string
{
    case ANMELDUNG_BESTAETIGT = 'ANMELDUNG_BESTAETIGT';
    case ABRECHNUNGSBEGINN_GLEICH_BESTAETIGTEM_VERTRAGSBEGINN = 'ABRECHNUNGSBEGINN_GLEICH_BESTAETIGTEM_VERTRAGSBEGINN';
    case ABRECHNUNGSENDE_GLEICH_BESTAETIGTEM_VERTRAGSENDE = 'ABRECHNUNGSENDE_GLEICH_BESTAETIGTEM_VERTRAGSENDE';
    case NN_MSCONS_UEBERSENDET = 'NN_MSCONS_UEBERSENDET';
    case RICHTIGE_MESSWERTE_ENERGIEMENGEN_UEBERSENDET = 'RICHTIGE_MESSWERTE_ENERGIEMENGEN_UEBERSENDET';
    case SONSTIGES_SIEHE_BEGRUENDUNG = 'SONSTIGES_SIEHE_BEGRUENDUNG';
    case GUELTIGES_PREISBLATT_VERSENDET = 'GUELTIGES_PREISBLATT_VERSENDET';
    case GUELTIGER_SPERRAUFTRAG_VORHANDEN = 'GUELTIGER_SPERRAUFTRAG_VORHANDEN';
    case KORREKTE_ARTIKEL_ID_IN_RECHNUNG = 'KORREKTE_ARTIKEL_ID_IN_RECHNUNG';
    case KORREKTER_PREIS_ZU_GUELTIGEM_PREISBLATT_IN_RECHNUNG = 'KORREKTER_PREIS_ZU_GUELTIGEM_PREISBLATT_IN_RECHNUNG';
    case RECHNUNG_KORREKT_A05 = 'RECHNUNG_KORREKT_A05';
    case RECHNUNG_KORREKT_A10 = 'RECHNUNG_KORREKT_A10';
    case RECHNUNG_KORREKT_A11 = 'RECHNUNG_KORREKT_A11';
    case GUELTIGES_PREISBLATT_FRISTGERECHT_VERSENDET = 'GUELTIGES_PREISBLATT_FRISTGERECHT_VERSENDET';
    case GUELTIGE_RECHNUNG_VORHANDEN = 'GUELTIGE_RECHNUNG_VORHANDEN';
    case ARTIKEL_ID_FUER_VERZUGSKOSTEN_VERWENDET = 'ARTIKEL_ID_FUER_VERZUGSKOSTEN_VERWENDET';
    case KORREKTER_PREIS_IN_RECHNUNG_ABGERECHNET = 'KORREKTER_PREIS_IN_RECHNUNG_ABGERECHNET';
    case GUELTIGES_PREISBLATT_BLINDARBEIT_VERSENDET = 'GUELTIGES_PREISBLATT_BLINDARBEIT_VERSENDET';
    case KORREKTE_ARTIKEL_ID_IST_ANGEGEBEN = 'KORREKTE_ARTIKEL_ID_IST_ANGEGEBEN';
    case RECHNUNG_BREGRUENDET_KORREKT = 'RECHNUNG_BREGRUENDET_KORREKT';
    case KORREKTE_ARTIKEL_ID_FUER_ABRECHNUNG_STORNIERTER_SPERRAUFTRAG_ANGEGEBEN =
    'KORREKTE_ARTIKEL_ID_FUER_ABRECHNUNG_STORNIERTER_SPERRAUFTRAG_ANGEGEBEN';
    case ABRECHNUNG_BLINDARBEIT_SPARTE_GAS_NICHT_RELEVANT = 'ABRECHNUNG_BLINDARBEIT_SPARTE_GAS_NICHT_RELEVANT';
    case SONSTIGES = 'SONSTIGES';
}
