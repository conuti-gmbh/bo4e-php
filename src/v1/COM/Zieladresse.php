<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Zieladresse
{
    public function __construct(
        readonly ?string $zieladresse1,
        readonly ?string $zieladresse2,
        readonly ?string $zieladresse3,
        readonly ?string $zieladresse4,
        readonly ?string $zieladresse5
    ) {
    }
}
