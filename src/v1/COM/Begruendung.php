<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Begruendung
{
    public function __construct(
        public ?string $begruendung1,
        public ?string $begruendung2,
        public ?string $begruendung3,
        public ?string $begruendung4,
        public ?string $begruendung5
    ) {
    }
}
