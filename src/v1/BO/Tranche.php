<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Adresse;
use Conuti\BO4E\v1\COM\Energieherkunft;
use Conuti\BO4E\v1\COM\Katasteradresse;
use Conuti\BO4E\v1\COM\Menge;
use Conuti\BO4E\v1\COM\Messlokationszuordnung;
use Conuti\BO4E\v1\COM\Netznutzungsabrechnungsdaten;
use Conuti\BO4E\v1\COM\Verbrauch;
use Conuti\BO4E\v1\COM\Zaehlwerk;
use Conuti\BO4E\v1\Enum\Bilanzierungsmethode;
use Conuti\BO4E\v1\Enum\BildungTranchengroesse;
use Conuti\BO4E\v1\Enum\Energierichtung;
use Conuti\BO4E\v1\Enum\Fernsteuerbarkeit;
use Conuti\BO4E\v1\Enum\Gasqualitaet;
use Conuti\BO4E\v1\Enum\Gebiettyp;
use Conuti\BO4E\v1\Enum\Lokationszuordnung;
use Conuti\BO4E\v1\Enum\Marktrolle;
use Conuti\BO4E\v1\Enum\MesstechnischeEinordnung;
use Conuti\BO4E\v1\Enum\Netzebene;
use Conuti\BO4E\v1\Enum\Sparte;
use Conuti\BO4E\v1\Enum\Sperrstatus;
use Conuti\BO4E\v1\Enum\StatusErzeugendeMarktlokation;
use Conuti\BO4E\v1\Enum\Verbrauchsart;
use Conuti\BO4E\v1\Enum\VerguetungEmpfaenger;
use Conuti\BO4E\v1\Enum\Versorgungsart;
use Conuti\BO4E\v1\Enum\Zeitreihentyp;

class Tranche
{
    public function __construct(
        readonly string $boTyp,
        readonly string $versionStruktur,
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
        /** @var Energieherkunft[] */
        readonly array $energieherkunft = [],
    ) {
    }
}
