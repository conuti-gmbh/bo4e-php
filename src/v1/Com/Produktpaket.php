<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Umsetzungsgradvorgabe;
use Conuti\BO4E\v1\Enum\Priorisierung;

class Produktpaket
{
    public function __construct(
        readonly ?int $produktpaketId = null,
        /** @var ?Produkt[] */
        readonly ?array $produkt = null,
        readonly ?Umsetzungsgradvorgabe $umsetzungsgradvorgabe = null,
        readonly ?Priorisierung $priorisierung = null,
    ) {
    }
}
