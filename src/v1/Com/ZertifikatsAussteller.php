<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class ZertifikatsAussteller
{
    public function __construct(
        readonly ?string $zertifikatsAussteller1 = null,
        readonly ?string $zertifikatsAussteller2 = null,
        readonly ?string $zertifikatsAussteller3 = null,
        readonly ?string $zertifikatsAussteller4 = null,
        readonly ?string $zertifikatsAussteller5 = null,
    ) {
    }
}
