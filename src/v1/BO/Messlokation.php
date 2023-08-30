<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Adresse;
use Conuti\BO4E\v1\COM\Dienstleistung;
use Conuti\BO4E\v1\COM\Geraet;
use Conuti\BO4E\v1\COM\Zaehlwerk;

class Messlokation
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?string $messlokationsId,
        public ?string $sparte,
        public ?string $energierichtung,
        public ?string $netzebenemessung,
        public ?string $messgebietNr,
        public ?string $grundzustaendigerMSBCodeNr,
        public ?Adresse $messadresse,
        public ?string $bilanzierungsmethode,
        public ?bool $abrechnungmessstellenbetriebnna,
        public ?string $gasqualitaet,
        public ?float $verlustfaktor,
        public ?string $betriebszustand,
        public ?Geschaeftspartner $ablesekartenempfaenger,
        public ?string $referenzMarktlokationsId,
        public ?string $verwendungsumfang,
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
