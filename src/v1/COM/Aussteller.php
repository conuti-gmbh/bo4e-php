<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Aussteller
{
    public function __construct(
        readonly ?string $aussteller1,
        readonly ?string $aussteller2,
        readonly ?string $aussteller3,
        readonly ?string $aussteller4,
        readonly ?string $aussteller5
    ) {
    }
}
