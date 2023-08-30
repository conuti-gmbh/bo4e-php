<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Menge
{
    public function __construct(
        public int|float|null $wert,
        public ?string $einheit,
    ) {
    }
}
