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
use Conuti\BO4E\v1\Enum\Netzebene;
use Conuti\BO4E\v1\Enum\Sparte;
use Conuti\BO4E\v1\Enum\Verwendungsumfang;

class Messlokation
{
    public function __construct(
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?string $messlokationsId = null,
        readonly ?Sparte $sparte = null,
        readonly ?Energierichtung $energierichtung = null,
        readonly ?Netzebene $netzebenemessung = null,
        readonly ?string $messgebietNr = null,
        readonly ?string $grundzustaendigerMSBCodeNr = null,
        readonly ?Adresse $messadresse = null,
        readonly ?Bilanzierungsmethode $bilanzierungsmethode = null,
        readonly ?bool $abrechnungmessstellenbetriebnna = null,
        readonly ?Gasqualitaet $gasqualitaet = null,
        readonly ?float $verlustfaktor = null,
        readonly ?Betriebszustand $betriebszustand = null,
        readonly ?Geschaeftspartner $ablesekartenempfaenger = null,
        readonly ?string $referenzMarktlokationsId = null,
        readonly ?Verwendungsumfang $verwendungsumfang = null,
        readonly ?bool $zukuenftigerMeldepunkt = null,
        readonly ?Lokationszuordnung $lokationszuordnung = null,
        readonly ?Marktteilnehmer $beteiligterMarktpartner = null,
        /** @var Geraet[] */
        readonly array $geraete = [],
        /** @var Dienstleistung[] */
        readonly array $messdienstleistung = [],
        /** @var string[] */
        readonly array $messlokationszaehler = [],
        /** @var Zaehlwerk[] */
        readonly array $zaehlwerke = [],
        /** @var Marktteilnehmer[] */
        readonly array $marktrollen = [],
    ) {
    }
}
