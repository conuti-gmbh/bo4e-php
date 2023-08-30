<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Preis
{
    public function __construct(
        public null|int|float $wert,
        public ?string $einheit,
        public ?string $bezugswert,
        public ?string $status
    ) {
    }
}
