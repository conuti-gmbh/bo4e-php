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
        public string $boTyp,
        public string $versionStruktur,
        public ?string $tranchenId,
        public ?Sparte $sparte,
        public ?Energierichtung $energierichtung,
        public ?Bilanzierungsmethode $bilanzierungsmethode,
        public ?Verbrauchsart $verbrauchsart,
        public ?bool $unterbrechbar,
        public ?Netzebene $netzebene,
        public ?string $netzbetreiberCodeNr,
        public ?Gebiettyp $gebietTyp,
        public ?string $netzgebietNr,
        public ?string $bilanzierungsgebiet,
        public ?string $grundversorgerCodeNr,
        public ?Gasqualitaet $gasqualitaet,
        public ?Geschaeftspartner $endkunde,
        public ?Adresse $lokationsadresse,
        public ?Katasteradresse $katasterinformation,
        public ?string $regelzone,
        public ?string $marktgebiet,
        public ?Zeitreihentyp $zeitreihentyp,
        public ?MesstechnischeEinordnung $messtechnischeEinordnung,
        public ?Sperrstatus $sperrstatus,
        public ?string $referenzMarktlokationsId,
        public ?Versorgungsart $versorgungsart,
        public ?Fernsteuerbarkeit $fernsteuerbarkeit,
        public ?VerguetungEmpfaenger $verguetungEmpfaenger,
        public ?string $foerderungsLand,
        public ?StatusErzeugendeMarktlokation $statusErzeugendeMalo,
        public ?string $referenzTranche,
        public ?Menge $aufteilungsmenge,
        public ?string $bilanzkreis,
        public ?BildungTranchengroesse $bildungTranchengroesse,
        /** @var Marktteilnehmer[] */
        public array $marktrollen = [],
        /** @var Zaehlwerk[] */
        public array $zaehlwerke = [],
        /** @var Marktrolle[] */
        public array $zaehlwerkeBeteiligteMarktrolle = [],
        /** @var Verbrauch[] */
        public array $verbrauchsmenge = [],
        /** @var Messlokationszuordnung[] */
        public array $zugehoerigeMesslokationen = [],
        /** @var Netznutzungsabrechnungsdaten[] */
        public array $netznutzungsabrechnungsdaten = [],
        /** @var Energieherkunft[] */
        public array $energieherkunft = []
    ) {
    }

    public function getMarktrolle(Marktrolle $rolle): ?Marktteilnehmer
    {
        foreach ($this->marktrollen as $marktrolle) {
            if ($marktrolle->marktrolle === $rolle) {
                return $marktrolle;
            }
        }

        return null;
    }
}
