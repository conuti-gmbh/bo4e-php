<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Rufnummer
{
    public function __construct(
        public ?string $nummerntyp,
        public ?string $rufnummer
    ) {
    }
}
