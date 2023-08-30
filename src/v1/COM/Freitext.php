<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Freitext
{
    public function __construct(
        public ?string $freitext1,
        public ?string $freitext2,
        public ?string $freitext3,
        public ?string $freitext4,
        public ?string $freitext5,
    ) {
    }
}
