<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Com\Zeitraum;
use Conuti\BO4E\v1\Enum\Preisstatus;
use Conuti\BO4E\v1\Enum\Sparte;
use DateTime;
use Conuti\BO4E\v1\Enum\Leistungstyp;
use Conuti\BO4E\v1\Com\Preisposition;

class Preisblatt
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::PREISBLATT,
        readonly string $versionStruktur = '1',
        readonly ?string $bezeichnung = null,
        readonly ?Zeitraum $gueltigkeit = null,
        readonly ?Preisstatus $preisstatus = null,
        readonly ?Sparte $sparte = null,
        readonly ?DateTime $bilanzierungsdatum = null,
        readonly ?string $regelzone = null,
        readonly ?Leistungstyp $leistungstyp = null,
        readonly ?bool $nichtGenutzt = null,
        /** @var Preisposition[] */
        readonly array $preispositionen = [],
    ) {
    }
}
