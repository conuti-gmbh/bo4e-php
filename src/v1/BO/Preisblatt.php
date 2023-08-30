<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Preisposition;
use Conuti\BO4E\v1\COM\Zeitraum;
use Conuti\BO4E\v1\Enum\Leistungstyp;
use Conuti\BO4E\v1\Enum\Preisstatus;
use Conuti\BO4E\v1\Enum\Sparte;

class Preisblatt
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?string $bezeichnung,
        public ?Zeitraum $gueltigkeit,
        public ?Preisstatus $preisstatus,
        public ?Sparte $sparte,
        public ?string $bilanzierungsdatum,
        public ?string $regelzone,
        public ?Leistungstyp $leistungstyp,
        /** @var Preisposition[] */
        public array $preispositionen = []
    ) {
    }
}
