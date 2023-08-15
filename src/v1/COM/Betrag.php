<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Betrag
{
    public function __construct(
        readonly int|float|null $wert,
        readonly ?string $waehrung
    ) {
    }
}
