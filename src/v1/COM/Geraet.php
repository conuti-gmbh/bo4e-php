<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Geraetetyp;
use Conuti\BO4E\v1\Enum\Volumenerfassung;

class Geraet
{
    public function __construct(
        public ?Geraetetyp $geraetetyp,
        public ?string $bezeichnung,
        public ?string $geraetenummer,
        public ?string $geraetereferenz,
        public ?Geraeteeigenschaften $geraeteeigenschaften,
        public ?Volumenerfassung $volumenerfassung,
        /** @var string[] */
        public array $weitereGeraetenummern = []
    ) {
    }
}
