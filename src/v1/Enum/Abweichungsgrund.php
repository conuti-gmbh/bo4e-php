<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Abweichungsgrund: string
{
    case PREIS_RECHENREGEL_FALSCH = 'PREIS_RECHENREGEL_FALSCH';
    case FALSCHER_ABRECHNUNGSZEITRAUM = 'FALSCHER_ABRECHNUNGSZEITRAUM';
    case UNBEKANNTE_MARKTLOKATION_MESSLOKATION = 'UNBEKANNTE_MARKTLOKATION_MESSLOKATION';
    case SONSTIGER_ABWEICHUNGSGRUND = 'SONSTIGER_ABWEICHUNGSGRUND';
    case DOPPELTE_RECHNUNG = 'DOPPELTE_RECHNUNG';
    case ABRECHNUNGSBEGINN_UNGLEICH_VERTRAGSBEGINN = 'ABRECHNUNGSBEGINN_UNGLEICH_VERTRAGSBEGINN';
    case ABRECHNUNGSENDE_UNGLEICH_VERTRAGSENDE = 'ABRECHNUNGSENDE_UNGLEICH_VERTRAGSENDE';
    case BETRAG_DER_ABSCHLAGSRECHNUNG_FALSCH = 'BETRAG_DER_ABSCHLAGSRECHNUNG_FALSCH';
    case VORAUSBEZAHLTER_BETRAG_FALSCH = 'VORAUSBEZAHLTER_BETRAG_FALSCH';
    case ARTIKEL_NICHT_VEREINBART = 'ARTIKEL_NICHT_VEREINBART';
    case NETZNUTZUNGSMESSWERTE_ENERGIEMENGEN_FEHLEN = 'NETZNUTZUNGSMESSWERTE_ENERGIEMENGEN_FEHLEN';
    case RECHNUNGSNUMMER_BEREITS_ERHALTEN = 'RECHNUNGSNUMMER_BEREITS_ERHALTEN';
    case NETZNUTZUNGSMESSWERTE_ENERGIEMENGEN_FALSCH = 'NETZNUTZUNGSMESSWERTE_ENERGIEMENGEN_FALSCH';
    case ZEITLICHE_MENGENANGABE_FEHLERHAFT = 'ZEITLICHE_MENGENANGABE_FEHLERHAFT';
    case FALSCHER_BILANZIERUNGSBEGINN = 'FALSCHER_BILANZIERUNGSBEGINN';
    case FALSCHES_NETZNUTZUNGSENDE = 'FALSCHES_NETZNUTZUNGSENDE';
    case BILANZIERTE_MENGE_FEHLT = 'BILANZIERTE_MENGE_FEHLT';
    case BILANZIERTE_MENGE_FALSCH = 'BILANZIERTE_MENGE_FALSCH';
    case NETZNUTZUNGSABRECHNUNG_FEHLT = 'NETZNUTZUNGSABRECHNUNG_FEHLT';
    case REVERSE_CHARGE_ANWENDUNG_FEHLT_ODER_FEHLERHAFT = 'REVERSE_CHARGE_ANWENDUNG_FEHLT_ODER_FEHLERHAFT';
    case ALLOKATIONSLISTE_FEHLT = 'ALLOKATIONSLISTE_FEHLT';
    case MEHR_MINDERMENGE_FALSCH = 'MEHR_MINDERMENGE_FALSCH';
    case UNGUELTIGES_RECHNUNGSDATUM = 'UNGUELTIGES_RECHNUNGSDATUM';
    case ZEITINTERVALL_DER_BILANZIERTEN_MENGE_INKONSISTENT = 'ZEITINTERVALL_DER_BILANZIERTEN_MENGE_INKONSISTENT';
    case RECHNUNGSEMPFAENGER_WIDERSPRICHT_DER_STEUERRECHTLICHEN_EINSCHAETZUNG_DES_RECHNUNGSSTELLERS = 'RECHNUNGSEMPFAENGER_WIDERSPRICHT_DER_STEUERRECHTLICHEN_EINSCHAETZUNG_DES_RECHNUNGSSTELLERS';
    case ANGEGEBENE_QUOTES_AN_MARKTLOKATION_NICHT_VORHANDEN = 'ANGEGEBENE_QUOTES_AN_MARKTLOKATION_NICHT_VORHANDEN';
    case RECHNUNGSABWICKLUNG_NICHT_VEREINBART = 'RECHNUNGSABWICKLUNG_NICHT_VEREINBART';
    case COMDIS_WIRD_ABGELEHNT = 'COMDIS_WIRD_ABGELEHNT';
}
