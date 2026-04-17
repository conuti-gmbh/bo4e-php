<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class AdresszusatzInformation
{
    public function __construct(
        readonly ?string $zusatz1 = null,
        readonly ?string $zusatz2 = null,
        readonly ?string $zusatz3 = null,
        readonly ?string $zusatz4 = null,
        readonly ?string $zusatz5 = null,
    ) {
    }
}
