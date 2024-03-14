<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Adresse;
use Conuti\BO4E\v1\COM\Energieherkunft;
use Conuti\BO4E\v1\COM\Katasteradresse;
use Conuti\BO4E\v1\COM\Messlokationszuordnung;
use Conuti\BO4E\v1\COM\Messstellenbetriebsabrechnungsdaten;
use Conuti\BO4E\v1\COM\Netznutzungsabrechnungsdaten;
use Conuti\BO4E\v1\COM\Verbrauch;
use Conuti\BO4E\v1\COM\Zaehlwerk;
use Conuti\BO4E\v1\Enum\Bilanzierungsmethode;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Energierichtung;
use Conuti\BO4E\v1\Enum\Fernsteuerbarkeit;
use Conuti\BO4E\v1\Enum\Gasqualitaet;
use Conuti\BO4E\v1\Enum\Gebiettyp;
use Conuti\BO4E\v1\Enum\Lokationszuordnung;
use Conuti\BO4E\v1\Enum\Marktrolle;
use Conuti\BO4E\v1\Enum\MesstechnischeEinordnung;
use Conuti\BO4E\v1\Enum\ModulNetzentgelte;
use Conuti\BO4E\v1\Enum\Netzebene;
use Conuti\BO4E\v1\Enum\Sperrstatus;
use Conuti\BO4E\v1\Enum\StatusErzeugendeMarktlokation;
use Conuti\BO4E\v1\Enum\Verbrauchsart;
use Conuti\BO4E\v1\Enum\VerguetungEmpfaenger;
use Conuti\BO4E\v1\Enum\Versorgungsart;
use Conuti\BO4E\v1\Enum\Zeitreihentyp;

class Marktlokation
{
    public function __construct(
        readonly BOTyp $boTyp,
        readonly string $versionStruktur,
        readonly ?string $marktlokationsId = null,
        readonly ?string $sparte = null,
        readonly ?Energierichtung $energierichtung = null,
        readonly ?Bilanzierungsmethode $bilanzierungsmethode = null,
        readonly ?Verbrauchsart $verbrauchsart = null,
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
        /** @var Marktteilnehmer[] */
        readonly array $marktrollen = [],
        /** @var Zaehlwerk[] */
        readonly array $zaehlwerke = [],
        /** @var Marktrolle[] */
        readonly array $zaehlwerkeBeteiligteMarktrolle = [],
        /** @var Verbrauch[] */
        readonly array $verbrauchsmenge = [],
        /** @var Messlokationszuordnung[] */
        readonly array $zugehoerigeMesslokationen = [],
        /** @var Netznutzungsabrechnungsdaten[] */
        readonly array $netznutzungsabrechnungsdaten = [],
        /** @var Messstellenbetriebsabrechnungsdaten[] */
        readonly array $messstellenbetriebsabrechnungsdaten = [],
        /** @var Energieherkunft[] */
        readonly array $energieherkunft = [],
    ) {
    }
}
