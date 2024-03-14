<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class ZertifikatsNutzer
{
    public function __construct(
        readonly ?string $zertifikatsNutzer1 = null,
        readonly ?string $zertifikatsNutzer2 = null,
        readonly ?string $zertifikatsNutzer3 = null,
        readonly ?string $zertifikatsNutzer4 = null,
        readonly ?string $zertifikatsNutzer5 = null,
    ) {
    }
}
