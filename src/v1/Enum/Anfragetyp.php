<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Anfragetyp: string
{
    case KAUF = 'KAUF';
    case NUTZUNGSUEBERLASSUNG = 'NUTZUNGSUEBERLASSUNG';
    case ABRECHNUNGSBRENNWERT_UND_ZUSTANDSZAHL = 'ABRECHNUNGSBRENNWERT_UND_ZUSTANDSZAHL';
    case LASTGANGDATEN = 'LASTGANGDATEN';
    case ZAEHLERSTAENDE = 'ZAEHLERSTAENDE';
    case WERTEERMITTLUNG = 'WERTEERMITTLUNG';
    case ENERGIEMENGE_EINZELWERT = 'ENERGIEMENGE_EINZELWERT';
    case INNERHALB_DER_ARBEITSZEIT = 'INNERHALB_DER_ARBEITSZEIT';
    case AUCH_AUSSERHALB_DER_ARBEITSZEIT = 'AUCH_AUSSERHALB_DER_ARBEITSZEIT';
    case WECHSEL_SAEMTLICHER_EINRICHTUNGEN = 'WECHSEL_SAEMTLICHER_EINRICHTUNGEN';
    case TEILWEISER_WECHSEL = 'TEILWEISER_WECHSEL';
    case AENDERUNG_ZAEHLZEITDEFINITION = 'AENDERUNG_ZAEHLZEITDEFINITION';
    case ABBESTELLUNG_ZAEHLZEITEN = 'ABBESTELLUNG_ZAEHLZEITEN';
    case ABBESTELLUNG_MESSPRODUKT = 'ABBESTELLUNG_MESSPRODUKT';
    case ANGEBOT_AUF_BASIS_PREISBLATT = 'ANGEBOT_AUF_BASIS_PREISBLATT';
    case INDIVIDUELLES_ANGEBOT = 'INDIVIDUELLES_ANGEBOT';
    case AENDERUNG_KONFIGURATION = 'AENDERUNG_KONFIGURATION';
    case KANN_NICHT_ANGEBOTEN_WERDEN = 'KANN_NICHT_ANGEBOTEN_WERDEN';
    case NEUKONFIGURATION = 'NEUKONFIGURATION';
}
