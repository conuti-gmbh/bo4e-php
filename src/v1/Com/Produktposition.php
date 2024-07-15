<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class Produktposition
{
    public function __construct(
        readonly ?string $positionscode = null,
        readonly ?string $wertedetails = null,
    ) {
    }
}
