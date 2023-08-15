<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class AdresszusatzInformation
{
    public function __construct(
        readonly ?string $zusatz1,
        readonly ?string $zusatz2,
        readonly ?string $zusatz3,
        readonly ?string $zusatz4,
        readonly ?string $zusatz5,
    ) {
    }
}
