<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Interface;

interface Anfragekategorie
{
    public const PROZESSDATENBERICHT = 'PROZESSDATENBERICHT';
    public const GERAETEUEBERNAHME = 'GERAETEUEBERNAHME';
    public const WEITERVERPFLICHTUNG_BETRIEB_MELO = 'WEITERVERPFLICHTUNG_BETRIEB_MELO';
    public const AENDERUNG_MELO = 'AENDERUNG_MELO';
    public const STAMMDATEN_MALO_ODER_MELO = 'STAMMDATEN_MALO_ODER_MELO';
    public const BILANZIERTE_MENGE_MEHR_MINDER_MENGEN = 'BILANZIERTE_MENGE_MEHR_MINDER_MENGEN';
    public const ALLOKATIONSLISTE_MEHR_MINDER_MENGEN = 'ALLOKATIONSLISTE_MEHR_MINDER_MENGEN';
    public const ENERGIEMENGE_UND_LEISTUNGSMAXIMUM = 'ENERGIEMENGE_UND_LEISTUNGSMAXIMUM';
    public const ABRECHNUNG_MESSSTELLENBETRIEB_MSB_AN_LF = 'ABRECHNUNG_MESSSTELLENBETRIEB_MSB_AN_LF';
    public const AENDERUNG_PROGNOSEGRUNDLAGE_GERAETEKONFIGURATION = 'AENDERUNG_PROGNOSEGRUNDLAGE_GERAETEKONFIGURATION';
    public const AENDERUNG_GERAETEKONFIGURATION = 'AENDERUNG_GERAETEKONFIGURATION';
    public const REKLAMATION_VON_WERTEN = 'REKLAMATION_VON_WERTEN';
    public const LASTGANG_MALO_TRANCHE = 'LASTGANG_MALO_TRANCHE';
    public const SPERRUNG = 'SPERRUNG';
    public const ENTSPERRUNG = 'ENTSPERRUNG';
    public const REKLAMATION_ZAEHLZEITDEFINITION = 'REKLAMATION_ZAEHLZEITDEFINITION';
    public const ZEITREIHEN_IM_RAHMEN_BILANZKREISABRECHNUNG = 'ZEITREIHEN_IM_RAHMEN_BILANZKREISABRECHNUNG';
    public const GERAETEWECHSELABSICHT = 'GERAETEWECHSELABSICHT';
    public const AENDERUNG_KONZESSIONSABGABE = 'AENDERUNG_KONZESSIONSABGABE';
    public const AENDERUNG_ZAEHLZEITDEFINITION = 'AENDERUNG_ZAEHLZEITDEFINITION';
    public const UEBERMITTLUNG_WERTE_AN_ESA = 'UEBERMITTLUNG_WERTE_AN_ESA';
    public const AENDERUNG = 'AENDERUNG';
    public const BILANZKREISZUORDNUNGSLISTE = 'BILANZKREISZUORDNUNGSLISTE';
    public const CLEARINGLISTE = 'CLEARINGLISTE';
    public const NORMIERTES_PROFIL_PROFILSCHAR = 'NORMIERTES_PROFIL_PROFILSCHAR';
    public const REDISPATCH_EINZELZEITREIHE_AUSFALLARBEIT = 'REDISPATCH_EINZELZEITREIHE_AUSFALLARBEIT';
    public const REKLAMATION_PROFIL_PROFILSCHAR = 'REKLAMATION_PROFIL_PROFILSCHAR';
    public const STAMMDATEN_MALO = 'STAMMDATEN_MALO';
    public const STAMMDATEN_MELO = 'STAMMDATEN_MELO';
    public const STAMMDATEN_TRANCHE = 'STAMMDATEN_TRANCHE';
}
