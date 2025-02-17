<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Sparte;
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
use Conuti\BO4E\v1\Enum\Fernsteuerbarkeit;
use Conuti\BO4E\v1\Enum\VerguetungEmpfaenger;
use Conuti\BO4E\v1\Enum\StatusErzeugendeMarktlokation;
use Conuti\BO4E\v1\Com\Menge;
use Conuti\BO4E\v1\Enum\BildungTranchengroesse;
use Conuti\BO4E\v1\Enum\Lokationszuordnung;
use Conuti\BO4E\v1\Com\Zaehlwerk;
use Conuti\BO4E\v1\Enum\Marktrolle;
use Conuti\BO4E\v1\Com\Verbrauch;
use Conuti\BO4E\v1\Com\Messlokationszuordnung;
use Conuti\BO4E\v1\Com\Netznutzungsabrechnungsdaten;
use Conuti\BO4E\v1\Com\Energieherkunft;
use Conuti\BO4E\v1\Enum\Datenqualitaet;
use Conuti\BO4E\v1\Com\Zeitraum;

class Tranche
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::TRANCHE,
        readonly string $versionStruktur = '1',
        readonly ?string $tranchenId = null,
        readonly ?Sparte $sparte = null,
        readonly ?Energierichtung $energierichtung = null,
        readonly ?Bilanzierungsmethode $bilanzierungsmethode = null,
        readonly ?Verbrauchsart $verbrauchsart = null,
        readonly ?bool $unterbrechbar = null,
        readonly ?Netzebene $netzebene = null,
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
        readonly ?Fernsteuerbarkeit $fernsteuerbarkeit = null,
        readonly ?VerguetungEmpfaenger $verguetungEmpfaenger = null,
        readonly ?string $foerderungsLand = null,
        readonly ?StatusErzeugendeMarktlokation $statusErzeugendeMalo = null,
        readonly ?string $referenzTranche = null,
        readonly ?Menge $aufteilungsmenge = null,
        readonly ?string $bilanzkreis = null,
        readonly ?BildungTranchengroesse $bildungTranchengroesse = null,
        readonly ?bool $zukuenftigerMeldepunkt = null,
        readonly ?Lokationszuordnung $lokationszuordnung = null,
        readonly ?Marktteilnehmer $beteiligterMarktpartner = null,
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
        /** @var ?Energieherkunft[] */
        readonly ?array $energieherkunft = null,
        readonly ?Datenqualitaet $datenqualitaet = null,
        readonly ?Zeitraum $gueltigkeitszeitraum = null,
    ) {
    }
}
