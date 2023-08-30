<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Geraeteeigenschaften
{
    public function __construct(
        public ?string $geraetetyp,
        public ?string $geraetemerkmal,
        public ?float $faktor
    ) {
    }
}
