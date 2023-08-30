<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class ExterneReferenz
{
    public function __construct(
        public ?string $exRefName,
        public ?string $exRefWert,
    ) {
    }
}
