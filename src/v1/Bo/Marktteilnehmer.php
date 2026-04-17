<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Geschaeftspartnerrolle;
use Conuti\BO4E\v1\Com\Adresse;
use Conuti\BO4E\v1\Enum\Marktrolle;
use Conuti\BO4E\v1\Enum\Rollencodetyp;
use Conuti\BO4E\v1\Enum\Kommunikationsrolle;
use Conuti\BO4E\v1\Com\Kommunikationsparameter;
use Conuti\BO4E\v1\Enum\MSBEigenschaft;
use Conuti\BO4E\v1\Com\Bankverbindung;
use Conuti\BO4E\v1\Com\Erreichbarkeit;
use Conuti\BO4E\v1\Com\IpRange;
use DateTime;
use Conuti\BO4E\v1\Enum\VerwendungszweckBilanzkreis;

class Marktteilnehmer
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::MARKTTEILNEHMER,
        readonly string $versionStruktur = '1',
        readonly ?Geschaeftspartnerrolle $geschaeftspartnerrolle = null,
        readonly ?string $anrede = null,
        readonly ?string $name1 = null,
        readonly ?string $name2 = null,
        readonly ?string $name3 = null,
        readonly ?string $name4 = null,
        readonly ?Adresse $partneradresse = null,
        readonly ?bool $gewerbekennzeichnung = null,
        readonly ?string $externeKundenummerLieferant = null,
        readonly ?Marktrolle $marktrolle = null,
        readonly ?string $rollencodenummer = null,
        readonly ?Rollencodetyp $rollencodetyp = null,
        readonly ?string $umsatzsteuerId = null,
        readonly ?string $steuernummer = null,
        readonly ?Ansprechpartner $ansprechpartner = null,
        readonly ?string $makoadresse = null,
        readonly ?string $downloadlinkZertifikat = null,
        readonly ?string $amtsgericht = null,
        readonly ?string $hrnummer = null,
        readonly ?string $website = null,
        readonly ?string $faxnummer = null,
        readonly ?Kommunikationsrolle $kommunikationsrolle = null,
        readonly ?bool $weiterverpflichtet = null,
        readonly ?Kommunikationsparameter $kommunikationsparameter = null,
        readonly ?MSBEigenschaft $messstellenbetreiberEigenschaft = null,
        /** @var ?Bankverbindung[] */
        readonly ?array $bankverbindung = null,
        /** @var ?Erreichbarkeit[] */
        readonly ?array $erreichbarkeit = null,
        readonly ?string $ipAdresse = null,
        readonly ?IpRange $ipRange = null,
        readonly ?DateTime $zuordnungVon = null,
        readonly ?DateTime $zuordnungBis = null,
        readonly ?string $bilanzkreis = null,
        readonly ?VerwendungszweckBilanzkreis $verwendungszweckBilanzkreis = null,
    ) {
    }
}
