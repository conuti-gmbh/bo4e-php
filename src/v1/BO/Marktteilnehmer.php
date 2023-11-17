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
    /*
     * As we have constructor parameters with 'readonly'
     * these cannot be passed to parent, as this would 'modify'
     * the property. As the class attributes are created by their
     * constructor names, it makes no sense to call parent::__construct,
     * and it would fail because of the previously mentioned reason
     *
     * One could argue, that it then makes no sense to extend, but we
     * honor the BO4E definition by that and make clear why the object
     * looks that way
     */
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
