<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Fehler
{
    public function __construct(
        public ?string $typ,
        /** @var FehlerDetail[] */
        public array $fehlerDetails = [],
    ) {
    }
}
