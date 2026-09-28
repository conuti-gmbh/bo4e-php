<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\VerwendungszweckBilanzkreis;

class Bilanzkreis
{
    public function __construct(
        readonly ?BOTyp $boTyp = BOTyp::BILANZKREIS,
        readonly ?string $versionStruktur = '1',
        readonly ?string $bezeichnung = null,
        readonly ?int $prioritaet = null,
        readonly ?VerwendungszweckBilanzkreis $verwendungszweckBilanzkreis = null,
    ) {
    }
}
