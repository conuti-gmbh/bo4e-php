<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Nennleistung
{
    public function __construct(
        readonly ?float $aufnahme,
        readonly ?float $abgabe
    ) {
    }
}
