<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Verwendungszweck
{
    public function __construct(
        public ?string $marktrolle,
        /** @var string[] */
        public array $zweck = [],
    ) {
    }
}
