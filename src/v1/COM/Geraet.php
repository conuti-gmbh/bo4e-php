<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Geraetetyp;
use Conuti\BO4E\v1\Enum\Volumenerfassung;

class Geraet
{
    public function __construct(
        readonly ?Geraetetyp $geraetetyp = null,
        readonly ?string $bezeichnung = null,
        readonly ?string $geraetenummer = null,
        readonly ?string $geraetereferenz = null,
        readonly ?Geraeteeigenschaften $geraeteeigenschaften = null,
        readonly ?Volumenerfassung $volumenerfassung = null,
        /** @var string[] */
        readonly array $weitereGeraetenummern = [],
    ) {
    }
}
