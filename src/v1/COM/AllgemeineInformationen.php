<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class AllgemeineInformationen
{
    public function __construct(
        readonly ?string $info1,
        readonly ?string $info2,
        readonly ?string $info3,
        readonly ?string $info4,
        readonly ?string $info5
    ) {
    }
}
