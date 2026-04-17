<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class Beschreibung
{
    public function __construct(
        readonly ?string $beschreibung1 = null,
        readonly ?string $beschreibung2 = null,
    ) {
    }
}
