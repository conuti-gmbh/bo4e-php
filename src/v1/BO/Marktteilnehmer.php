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
        readonly ?string $versionStruktur,
        readonly ?Geschaeftspartnerrolle $geschaeftspartnerrolle,
        readonly ?string $anrede,
        readonly ?string $name1,
        readonly ?string $name2,
        readonly ?string $name3,
        readonly ?string $name4,
        readonly ?Adresse $partneradresse,
        readonly ?bool $gewerbekennzeichnung,
        readonly ?string $externeKundenummerLieferant,
        readonly ?Marktrolle $marktrolle,
        readonly ?string $rollencodenummer,
        readonly ?string $rollencodetyp,
        readonly ?string $umsatzsteuerId,
        readonly ?string $steuernummer,
        readonly ?Ansprechpartner $ansprechpartner,
        readonly ?string $makoadresse,
        readonly ?string $downloadlinkZertifikat,
        readonly ?string $amtsgericht,
        readonly ?string $hrnummer,
        readonly ?string $website,
        readonly ?string $faxnummer,
        readonly ?Kommunikationsrolle $kommunikationsrolle,
        readonly ?bool $weiterverpflichtet,
        readonly ?Kommunikationsparameter $kommunikationsparameter,
        readonly ?MSBEigenschaft $messstellenbetreiberEigenschaft,
        /** @var Bankverbindung[] */
        readonly array $bankverbindung = [],
        /** @var Erreichbarkeit[] */
        readonly array $erreichbarkeit = []
    ) {
    }
}
