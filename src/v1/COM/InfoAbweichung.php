<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class InfoAbweichung
{
    public function __construct(
        public ?string $abweichung1,
        public ?string $abweichung2,
        public ?string $abweichung3,
        public ?string $abweichung4,
        public ?string $abweichung5
    ) {
    }
}
