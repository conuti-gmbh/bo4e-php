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
use Conuti\BO4E\v1\Enum\Lokationszuordnung;
use Conuti\BO4E\v1\Enum\Marktrolle;
use Conuti\BO4E\v1\Enum\Netzebene;
use Conuti\BO4E\v1\Enum\Sparte;
use Conuti\BO4E\v1\Enum\Verwendungsumfang;

class Messlokation
{
    public function __construct(
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?string $messlokationsId,
        readonly ?Sparte $sparte,
        readonly ?Energierichtung $energierichtung,
        readonly ?Netzebene $netzebenemessung,
        readonly ?string $messgebietNr,
        readonly ?string $grundzustaendigerMSBCodeNr,
        readonly ?Adresse $messadresse,
        readonly ?Bilanzierungsmethode $bilanzierungsmethode,
        readonly ?bool $abrechnungmessstellenbetriebnna,
        readonly ?Gasqualitaet $gasqualitaet,
        readonly ?float $verlustfaktor,
        readonly ?Betriebszustand $betriebszustand,
        readonly ?Geschaeftspartner $ablesekartenempfaenger,
        readonly ?string $referenzMarktlokationsId,
        readonly ?Verwendungsumfang $verwendungsumfang,
        readonly ?bool $zukuenftigerMeldepunkt,
        readonly ?Lokationszuordnung $lokationszuordnung,
        readonly ?Marktteilnehmer $beteiligterMarktpartner,
        /** @var Geraet[] */
        readonly array $geraete = [],
        /** @var Dienstleistung[] */
        readonly array $messdienstleistung = [],
        /** @var string[] */
        readonly array $messlokationszaehler = [],
        /** @var Zaehlwerk[] */
        readonly array $zaehlwerke = [],
        /** @var Marktteilnehmer[] */
        readonly array $marktrollen = []
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
