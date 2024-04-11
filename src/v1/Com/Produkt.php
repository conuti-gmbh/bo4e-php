<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class Produkt
{
    public function __construct(
        readonly ?int $produktpaketID = null,
        readonly ?string $produktCode = null,
        readonly ?string $positionscode = null,
        readonly ?string $wertedetails = null,
    ) {
    }
}
