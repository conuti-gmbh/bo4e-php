<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Fehlerbeschreibung
{
    public function __construct(
        readonly ?string $beschreibung1 = null,
        readonly ?string $beschreibung2 = null,
        readonly ?string $beschreibung3 = null,
        readonly ?string $beschreibung4 = null,
        readonly ?string $beschreibung5 = null,
    ) {
    }
}
