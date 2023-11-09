<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class ZertifikatsAussteller
{
    public function __construct(
        readonly ?string $zertifikatsAussteller1,
        readonly ?string $zertifikatsAussteller2,
        readonly ?string $zertifikatsAussteller3,
        readonly ?string $zertifikatsAussteller4,
        readonly ?string $zertifikatsAussteller5
    ) {
    }
}
