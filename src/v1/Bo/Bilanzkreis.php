<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;

class Bilanzkreis
{
    public function __construct(
        readonly ?BOTyp $boTyp = BOTyp::BILANZKREIS,
        readonly ?string $versionStruktur = '1',
        readonly ?string $bezeichnung = null,
        readonly ?int $prioritaet = null,
    ) {
    }
}
