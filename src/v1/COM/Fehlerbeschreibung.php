<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Fehlerbeschreibung
{
    public function __construct(
        readonly ?string $beschreibung1,
        readonly ?string $beschreibung2,
        readonly ?string $beschreibung3,
        readonly ?string $beschreibung4,
        readonly ?string $beschreibung5
    ) {
    }
}
