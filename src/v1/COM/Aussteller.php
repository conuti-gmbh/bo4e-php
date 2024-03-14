<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Aussteller
{
    public function __construct(
        readonly ?string $aussteller1 = null,
        readonly ?string $aussteller2 = null,
        readonly ?string $aussteller3 = null,
        readonly ?string $aussteller4 = null,
        readonly ?string $aussteller5 = null,
    ) {
    }
}
