<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Rueckmeldungsposition
{
    public function __construct(
        public ?string $positionsnummer,
        /** @var Abweichungsposition[] */
        public array $positionen = []
    ) {
    }
}
