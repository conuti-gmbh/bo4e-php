<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Geraetetyp;
use Conuti\BO4E\v1\Enum\Volumenerfassung;

class Geraet
{
    public function __construct(
        readonly ?Geraetetyp $geraetetyp,
        readonly ?string $bezeichnung,
        readonly ?string $geraetenummer,
        readonly ?string $geraetereferenz,
        readonly ?Geraeteeigenschaften $geraeteeigenschaften,
        readonly ?Volumenerfassung $volumenerfassung,
        /** @var string[] */
        readonly array $weitereGeraetenummern = []
    ) {
    }
}
