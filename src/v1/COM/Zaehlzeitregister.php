<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Schwachlastfaehig;

class Zaehlzeitregister
{
    public function __construct(
        public ?string $zaehlzeitDefinition,
        public ?string $register,
        public ?Schwachlastfaehig $schwachlastfaehig
    ) {
    }
}
