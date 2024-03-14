<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Zieladresse
{
    public function __construct(
        readonly ?string $zieladresse1 = null,
        readonly ?string $zieladresse2 = null,
        readonly ?string $zieladresse3 = null,
        readonly ?string $zieladresse4 = null,
        readonly ?string $zieladresse5 = null,
    ) {
    }
}
