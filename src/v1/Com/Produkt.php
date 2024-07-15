<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class Produkt
{
    public function __construct(
        readonly ?string $produktCode = null,
        /** @var Produktposition[] */
        readonly array $produktPositionen = [],
    ) {
    }
}
