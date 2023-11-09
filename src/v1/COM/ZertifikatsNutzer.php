<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class ZertifikatsNutzer
{
    public function __construct(
        readonly ?string $zertifikatsNutzer1,
        readonly ?string $zertifikatsNutzer2,
        readonly ?string $zertifikatsNutzer3,
        readonly ?string $zertifikatsNutzer4,
        readonly ?string $zertifikatsNutzer5
    ) {
    }
}
