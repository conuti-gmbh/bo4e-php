<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Energierichtung;
use Conuti\BO4E\v1\Enum\Bilanzierungsmethode;
use Conuti\BO4E\v1\Enum\Verbrauchsart;
use Conuti\BO4E\v1\Enum\Netzebene;
use Conuti\BO4E\v1\Enum\Gebiettyp;
use Conuti\BO4E\v1\Enum\Gasqualitaet;
use Conuti\BO4E\v1\Com\Adresse;
use Conuti\BO4E\v1\Com\Katasteradresse;
use Conuti\BO4E\v1\Enum\Zeitreihentyp;
use Conuti\BO4E\v1\Enum\MesstechnischeEinordnung;
use Conuti\BO4E\v1\Enum\Sperrstatus;
use Conuti\BO4E\v1\Enum\Versorgungsart;
use Conuti\BO4E\v1\Enum\VerguetungEmpfaenger;
use Conuti\BO4E\v1\Enum\StatusErzeugendeMarktlokation;
use Conuti\BO4E\v1\Enum\Fernsteuerbarkeit;
use Conuti\BO4E\v1\Enum\Lokationszuordnung;
use Conuti\BO4E\v1\Enum\Marktrolle;
use Conuti\BO4E\v1\Enum\ModulNetzentgelte;
use Conuti\BO4E\v1\Enum\Datenqualitaet;
use Conuti\BO4E\v1\Com\Zeitraum;
use Conuti\BO4E\v1\Com\Zaehlwerk;
use Conuti\BO4E\v1\Com\Verbrauch;
use Conuti\BO4E\v1\Com\Messlokationszuordnung;
use Conuti\BO4E\v1\Com\Netznutzungsabrechnungsdaten;
use Conuti\BO4E\v1\Com\Messstellenbetriebsabrechnungsdaten;
use Conuti\BO4E\v1\Com\Energieherkunft;
use Conuti\BO4E\v1\Com\Produktpaket;
use Conuti\BO4E\v1\Com\Geokoordinaten;
use Conuti\BO4E\v1\Com\MarktlokationsTypisierung;

class Marktlokation
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::MARKTLOKATION,
        readonly string $versionStruktur = '1',
        readonly ?string $marktlokationsId = null,
        readonly ?string $sparte = null,
        readonly ?Energierichtung $energierichtung = null,
        readonly ?Bilanzierungsmethode $bilanzierungsmethode = null,
        /** @var ?Verbrauchsart[] */
        readonly ?array $verbrauchsart = null,
        readonly ?bool $unterbrechbar = null,
        readonly ?Netzebene $netzebene = null,
        readonly ?Netzebene $umspannung = null,
        readonly ?string $netzbetreiberCodeNr = null,
        readonly ?Gebiettyp $gebietTyp = null,
        readonly ?string $netzgebietNr = null,
        readonly ?string $bilanzierungsgebiet = null,
        readonly ?string $grundversorgerCodeNr = null,
        readonly ?Gasqualitaet $gasqualitaet = null,
        readonly ?Geschaeftspartner $endkunde = null,
        readonly ?Adresse $lokationsadresse = null,
        readonly ?Katasteradresse $katasterinformation = null,
        readonly ?string $regelzone = null,
        readonly ?string $marktgebiet = null,
        readonly ?Zeitreihentyp $zeitreihentyp = null,
        readonly ?MesstechnischeEinordnung $messtechnischeEinordnung = null,
        readonly ?Sperrstatus $sperrstatus = null,
        readonly ?string $referenzMarktlokationsId = null,
        readonly ?Versorgungsart $versorgungsart = null,
        readonly ?Geschaeftspartner $eigentuemer = null,
        readonly ?Geschaeftspartner $hausverwalter = null,
        readonly ?VerguetungEmpfaenger $verguetungEmpfaenger = null,
        readonly ?StatusErzeugendeMarktlokation $statusErzeugendeMalo = null,
        readonly ?Fernsteuerbarkeit $fernsteuerbarkeit = null,
        readonly ?string $foerderungsLand = null,
        readonly ?bool $redispatch = null,
        readonly ?bool $zukuenftigerMeldepunkt = null,
        readonly ?Lokationszuordnung $lokationszuordnung = null,
        readonly ?string $konfigurationsprodukt = null,
        readonly ?string $leistungskurvendefinition = null,
        readonly ?Marktrolle $produktdatenRelevanteRolle = null,
        readonly ?Marktteilnehmer $beteiligterMarktpartner = null,
        readonly ?ModulNetzentgelte $modulNetzentgelte = null,
        readonly ?Datenqualitaet $datenqualitaet = null,
        readonly ?Zeitraum $gueltigkeitszeitraum = null,
        /** @var ?Marktteilnehmer[] */
        readonly ?array $marktrollen = null,
        /** @var ?Zaehlwerk[] */
        readonly ?array $zaehlwerke = null,
        /** @var ?Marktrolle[] */
        readonly ?array $zaehlwerkeBeteiligteMarktrolle = null,
        /** @var ?Verbrauch[] */
        readonly ?array $verbrauchsmenge = null,
        /** @var ?Messlokationszuordnung[] */
        readonly ?array $zugehoerigeMesslokationen = null,
        /** @var ?Netznutzungsabrechnungsdaten[] */
        readonly ?array $netznutzungsabrechnungsdaten = null,
        /** @var ?Messstellenbetriebsabrechnungsdaten[] */
        readonly ?array $messstellenbetriebsabrechnungsdaten = null,
        /** @var ?Energieherkunft[] */
        readonly ?array $energieherkunft = null,
        /** @var ?Produktpaket[] */
        readonly ?array $erforderlichesProduktpaket = null,
        readonly ?Geokoordinaten $geokoordinaten = null,
        readonly ?string $paketId = null,
        /** @var ?MarktlokationsTypisierung[] */
        readonly ?array $marktlokationsTyp = null,
    ) {
    }
}
