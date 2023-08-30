<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Adresse;
use Conuti\BO4E\v1\COM\Dienstleistung;
use Conuti\BO4E\v1\COM\Geraet;
use Conuti\BO4E\v1\COM\Zaehlwerk;
use Conuti\BO4E\v1\Enum\Betriebszustand;
use Conuti\BO4E\v1\Enum\Bilanzierungsmethode;
use Conuti\BO4E\v1\Enum\Energierichtung;
use Conuti\BO4E\v1\Enum\Gasqualitaet;
use Conuti\BO4E\v1\Enum\Marktrolle;
use Conuti\BO4E\v1\Enum\Netzebene;
use Conuti\BO4E\v1\Enum\Sparte;
use Conuti\BO4E\v1\Enum\Verwendungsumfang;

class Messlokation
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?string $messlokationsId,
        public ?Sparte $sparte,
        public ?Energierichtung $energierichtung,
        public ?Netzebene $netzebenemessung,
        public ?string $messgebietNr,
        public ?string $grundzustaendigerMSBCodeNr,
        public ?Adresse $messadresse,
        public ?Bilanzierungsmethode $bilanzierungsmethode,
        public ?bool $abrechnungmessstellenbetriebnna,
        public ?Gasqualitaet $gasqualitaet,
        public ?float $verlustfaktor,
        public ?Betriebszustand $betriebszustand,
        public ?Geschaeftspartner $ablesekartenempfaenger,
        public ?string $referenzMarktlokationsId,
        public ?Verwendungsumfang $verwendungsumfang,
        /** @var Geraet[] */
        public array $geraete = [],
        /** @var Dienstleistung[] */
        public array $messdienstleistung = [],
        /** @var string[] */
        public array $messlokationszaehler = [],
        /** @var Zaehlwerk[] */
        public array $zaehlwerke = [],
        /** @var Marktteilnehmer[] */
        public array $marktrollen = []
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
