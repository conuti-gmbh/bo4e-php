<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Preisposition;
use Conuti\BO4E\v1\COM\Zeitraum;

class Preisblatt
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?string $bezeichnung,
        public ?Zeitraum $gueltigkeit,
        public ?string $preisstatus,
        public ?string $sparte,
        public ?string $bilanzierungsdatum,
        public ?string $regelzone,
        public ?string $leistungstyp,
        /** @var Preisposition[] */
        public array $preispositionen = []
    ) {
    }
}
