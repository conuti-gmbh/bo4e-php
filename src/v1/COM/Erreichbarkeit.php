<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Erreichbarkeit
{
    public function __construct(
        public ?string $verfuegbarkeit,
        public ?string $zeit
    ) {
    }
}
