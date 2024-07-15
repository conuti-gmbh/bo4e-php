<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class Produktpaket
{
    public function __construct(
        readonly ?int $produktpaketID = null,
        /** @var Produkt[] */
        readonly array $produkt = [],
        /** @var Priorisierung[] */
        readonly array $priorisierung = [],
    ) {
    }
}
