<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Sparte;
use Conuti\BO4E\v1\Enum\Energierichtung;
use Conuti\BO4E\v1\Enum\Netzebene;
use Conuti\BO4E\v1\Com\Adresse;
use Conuti\BO4E\v1\Enum\Bilanzierungsmethode;
use Conuti\BO4E\v1\Enum\Gasqualitaet;
use Conuti\BO4E\v1\Enum\Betriebszustand;
use Conuti\BO4E\v1\Enum\Verwendungsumfang;
use Conuti\BO4E\v1\Enum\Lokationszuordnung;
use Conuti\BO4E\v1\Com\Geraet;
use Conuti\BO4E\v1\Com\Dienstleistung;
use Conuti\BO4E\v1\Com\Zaehlwerk;
use Conuti\BO4E\v1\Enum\Datenqualitaet;
use Conuti\BO4E\v1\Com\Zeitraum;

class Messlokation
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::MESSLOKATION,
        readonly string $versionStruktur = '1',
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
        /** @var ?Geraet[] */
        readonly ?array $geraete = null,
        /** @var ?Dienstleistung[] */
        readonly ?array $messdienstleistung = null,
        /** @var ?string[] */
        readonly ?array $messlokationszaehler = null,
        /** @var ?Zaehlwerk[] */
        readonly ?array $zaehlwerke = null,
        /** @var ?Marktteilnehmer[] */
        readonly ?array $marktrollen = null,
        readonly ?Datenqualitaet $datenqualitaet = null,
        readonly ?Zeitraum $gueltigkeitszeitraum = null,
    ) {
    }
}
