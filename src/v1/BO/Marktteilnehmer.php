<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Adresse;
use Conuti\BO4E\v1\COM\Bankverbindung;
use Conuti\BO4E\v1\COM\Erreichbarkeit;

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
        public string $boTyp,
        public ?string $versionStruktur,
        public ?string $geschaeftspartnerrolle,
        public ?string $anrede,
        public ?string $name1,
        public ?string $name2,
        public ?string $name3,
        public ?string $name4,
        public ?Adresse $partneradresse,
        public ?bool $gewerbekennzeichnung,
        public ?string $externeKundenummerLieferant,
        public ?string $marktrolle,
        public ?string $rollencodenummer,
        public ?string $rollencodetyp,
        public ?string $umsatzsteuerId,
        public ?string $steuernummer,
        public ?Ansprechpartner $ansprechpartner,
        public ?string $makoadresse,
        public ?string $downloadlinkZertifikat,
        public ?string $amtsgericht,
        public ?string $hrnummer,
        public ?string $website,
        public ?string $faxnummer,
        public ?string $kommunikationsrolle,
        public ?bool $weiterverpflichtet,
        /** @var Bankverbindung[] */
        public array $bankverbindung = [],
        /** @var Erreichbarkeit[] */
        public array $erreichbarkeit = []
    ) {
    }
}
