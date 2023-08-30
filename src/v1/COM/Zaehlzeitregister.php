<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Zaehlzeitregister
{
    public function __construct(
        public ?string $zaehlzeitDefinition,
        public ?string $register,
        public ?string $schwachlastfaehig
    ) {
    }
}
