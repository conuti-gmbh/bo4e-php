<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Gruppe
{
    public function __construct(
        public ?string $gruppe1,
        public ?string $gruppe2,
    ) {
    }
}
