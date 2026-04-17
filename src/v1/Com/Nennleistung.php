<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class Nennleistung
{
    public function __construct(
        readonly ?float $aufnahme = null,
        readonly ?float $abgabe = null,
    ) {
    }
}
