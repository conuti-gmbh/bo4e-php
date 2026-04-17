<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Cdoc;

use Conuti\BO4E\v1\Bo\Bilanzierung;
use Conuti\BO4E\v1\Bo\Marktlokation;
use Conuti\BO4E\v1\Bo\Messlokation;
use Conuti\BO4E\v1\Bo\Vertrag;
use Conuti\BO4E\v1\Bo\Energiemenge;
use Conuti\BO4E\v1\Bo\Zaehler;
use Conuti\BO4E\v1\Bo\Rechnung;
use Conuti\BO4E\v1\Bo\Statusmitteilung;
use Conuti\BO4E\v1\Bo\Handelsunstimmigkeit;
use Conuti\BO4E\v1\Bo\Auftrag;
use Conuti\BO4E\v1\Bo\Anfrage;
use Conuti\BO4E\v1\Bo\Berechnungsformel;
use Conuti\BO4E\v1\Bo\Sperrauftrag;
use Conuti\BO4E\v1\Bo\Angebot;
use Conuti\BO4E\v1\Bo\Tranche;
use Conuti\BO4E\v1\Bo\Kommunikationsdaten;
use Conuti\BO4E\v1\Bo\Preisblatt;
use Conuti\BO4E\v1\Bo\Statusbericht;
use Conuti\BO4E\v1\Bo\Avis;
use Conuti\BO4E\v1\Bo\Reklamation;
use Conuti\BO4E\v1\Bo\Zaehlzeitdefinition;
use Conuti\BO4E\v1\Bo\Schaltzeitdefinition;
use Conuti\BO4E\v1\Bo\Leistungskurvendefinition;
use Conuti\BO4E\v1\Bo\Netzlokation;
use Conuti\BO4E\v1\Bo\SteuerbareRessource;
use Conuti\BO4E\v1\Bo\TechnischeRessource;
use Conuti\BO4E\v1\Bo\Lokationsbuendel;
use Conuti\BO4E\v1\Bo\AdHocSteuerkanal;
use Conuti\BO4E\v1\Bo\WerteNachTyp2;
use Conuti\BO4E\v1\Bo\Verwendungszeitraum;

class Stammdaten
{
    public function __construct(
        /** @var Bilanzierung[] */
        readonly array $BILANZIERUNG = [],
        /** @var Marktlokation[] */
        readonly array $MARKTLOKATION = [],
        /** @var Messlokation[] */
        readonly array $MESSLOKATION = [],
        /** @var Vertrag[] */
        readonly array $NETZNUTZUNGSVERTRAG = [],
        /** @var Vertrag[] */
        readonly array $MESSSTELLENBETRIEBSVERTRAG = [],
        /** @var Vertrag[] */
        readonly array $ENERGIELIEFERVERTRAG = [],
        /** @var Energiemenge[] */
        readonly array $ENERGIEMENGE = [],
        /** @var Zaehler[] */
        readonly array $ZAEHLER = [],
        /** @var Rechnung[] */
        readonly array $RECHNUNG = [],
        /** @var Statusmitteilung[] */
        readonly array $STATUSMITTEILUNG = [],
        /** @var Handelsunstimmigkeit[] */
        readonly array $HANDELSUNSTIMMIGKEIT = [],
        /** @var Auftrag[] */
        readonly array $AUFTRAG = [],
        /** @var Anfrage[] */
        readonly array $ANFRAGE = [],
        /** @var Berechnungsformel[] */
        readonly array $BERECHNUNGSFORMEL = [],
        /** @var Sperrauftrag[] */
        readonly array $SPERRAUFTRAG = [],
        /** @var Angebot[] */
        readonly array $ANGEBOT = [],
        /** @var Tranche[] */
        readonly array $TRANCHE = [],
        /** @var Kommunikationsdaten[] */
        readonly array $KOMMUNIKATIONSDATEN = [],
        /** @var Preisblatt[] */
        readonly array $PREISBLATT = [],
        /** @var Statusbericht[] */
        readonly array $STATUSBERICHT = [],
        /** @var Avis[] */
        readonly array $AVIS = [],
        /** @var Reklamation[] */
        readonly array $REKLAMATION = [],
        /** @var Zaehlzeitdefinition[] */
        readonly array $ZAEHLZEITDEFINITION = [],
        /** @var Schaltzeitdefinition[] */
        readonly array $SCHALTZEITDEFINITION = [],
        /** @var Leistungskurvendefinition[] */
        readonly array $LEISTUNGSKURVENDEFINITION = [],
        /** @var Netzlokation[] */
        readonly array $NETZLOKATION = [],
        /** @var SteuerbareRessource[] */
        readonly array $STEUERBARE_RESSOURCE = [],
        /** @var TechnischeRessource[] */
        readonly array $TECHNISCHE_RESSOURCE = [],
        /** @var Lokationsbuendel[] */
        readonly array $LOKATIONSBUENDEL = [],
        /** @var AdHocSteuerkanal[] */
        readonly array $AD_HOC_STEUERKANAL = [],
        /** @var WerteNachTyp2[] */
        readonly array $WERTE_NACH_TYP2 = [],
        /** @var Verwendungszeitraum[] */
        readonly array $VERWENDUNGSZEITRAUM = [],
    ) {
    }
}
