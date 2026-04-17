<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class IpRange
{
    public function __construct(
        readonly ?string $untereGrenze = null,
        readonly ?string $obereGrenze = null,
    ) {
    }
}
