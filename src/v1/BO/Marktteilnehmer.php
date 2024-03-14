<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Adresse;
use Conuti\BO4E\v1\COM\Bankverbindung;
use Conuti\BO4E\v1\COM\Erreichbarkeit;
use Conuti\BO4E\v1\COM\Kommunikationsparameter;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Geschaeftspartnerrolle;
use Conuti\BO4E\v1\Enum\Kommunikationsrolle;
use Conuti\BO4E\v1\Enum\Marktrolle;
use Conuti\BO4E\v1\Enum\MSBEigenschaft;

class Marktteilnehmer
{
    public function __construct(
        readonly BOTyp $boTyp,
        readonly string $versionStruktur,
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
        readonly ?string $rollencodetyp = null,
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
        /** @var Bankverbindung[] */
        readonly array $bankverbindung = [],
        /** @var Erreichbarkeit[] */
        readonly array $erreichbarkeit = [],
    ) {
    }
}
