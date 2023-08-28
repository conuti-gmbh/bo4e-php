<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Rueckmeldungsposition
{
    public function __construct(
        readonly ?string $positionsnummer,
        /** @var Abweichungsposition[] */
        readonly array $positionen = []
    ) {
    }
}
