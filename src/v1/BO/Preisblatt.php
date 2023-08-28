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
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?string $bezeichnung,
        readonly ?Zeitraum $gueltigkeit,
        readonly ?Preisstatus $preisstatus,
        readonly ?Sparte $sparte,
        readonly ?string $bilanzierungsdatum,
        readonly ?string $regelzone,
        readonly ?Leistungstyp $leistungstyp,
        /** @var Preisposition[] */
        readonly array $preispositionen = []
    ) {
    }
}
