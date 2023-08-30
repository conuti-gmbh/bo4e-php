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

class Tranche
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?string $tranchenId,
        public ?string $sparte,
        public ?string $energierichtung,
        public ?string $bilanzierungsmethode,
        public ?string $verbrauchsart,
        public ?bool $unterbrechbar,
        public ?string $netzebene,
        public ?string $netzbetreiberCodeNr,
        public ?string $gebietTyp,
        public ?string $netzgebietNr,
        public ?string $bilanzierungsgebiet,
        public ?string $grundversorgerCodeNr,
        public ?string $gasqualitaet,
        public ?Geschaeftspartner $endkunde,
        public ?Adresse $lokationsadresse,
        public ?Katasteradresse $katasterinformation,
        public ?string $regelzone,
        public ?string $marktgebiet,
        public ?string $zeitreihentyp,
        public ?string $messtechnischeEinordnung,
        public ?string $sperrstatus,
        public ?string $referenzMarktlokationsId,
        public ?string $versorgungsart,
        public ?string $fernsteuerbarkeit,
        public ?string $verguetungEmpfaenger,
        public ?string $foerderungsLand,
        public ?string $statusErzeugendeMalo,
        public ?string $referenzTranche,
        public ?Menge $aufteilungsmenge,
        public ?string $bilanzkreis,
        public ?string $bildungTranchengroesse,
        /** @var Marktteilnehmer[] */
        public array $marktrollen = [],
        /** @var Zaehlwerk[] */
        public array $zaehlwerke = [],
        /** @var string[] */
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

    public function getMarktrolle(string $rolle): ?Marktteilnehmer
    {
        foreach ($this->marktrollen as $marktrolle) {
            if ($marktrolle->marktrolle === $rolle) {
                return $marktrolle;
            }
        }

        return null;
    }
}
