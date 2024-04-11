<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class ErforderlichesProdukt
{
    public function __construct(
        /** @var Produkt[] */
        readonly array $produkt = [],
        /** @var Priorisierung[] */
        readonly array $priorisierung = [],
    ) {
    }
}
