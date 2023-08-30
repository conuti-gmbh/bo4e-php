<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Geraet
{
    public function __construct(
        public ?string $geraetetyp,
        public ?string $bezeichnung,
        public ?string $geraetenummer,
        public ?string $geraetereferenz,
        public ?Geraeteeigenschaften $geraeteeigenschaften,
        public ?string $volumenerfassung,
        /** @var string[] */
        public array $weitereGeraetenummern = []
    ) {
    }
}
