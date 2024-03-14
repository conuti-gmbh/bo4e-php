<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class AllgemeineInformationen
{
    public function __construct(
        readonly ?string $info1 = null,
        readonly ?string $info2 = null,
        readonly ?string $info3 = null,
        readonly ?string $info4 = null,
        readonly ?string $info5 = null,
    ) {
    }
}
