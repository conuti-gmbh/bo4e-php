<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class Betrag
{
    public function __construct(
        readonly ?float $wert = null,
        readonly ?string $waehrung = null,
    ) {
    }
}
