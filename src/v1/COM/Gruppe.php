<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Gruppe
{
    public function __construct(
        readonly ?string $gruppe1 = null,
        readonly ?string $gruppe2 = null,
    ) {
    }
}
