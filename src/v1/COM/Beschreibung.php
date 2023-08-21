<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Beschreibung
{
    public function __construct(
        readonly ?string $beschreibung1,
        readonly ?string $beschreibung2,
    ) {
    }
}
