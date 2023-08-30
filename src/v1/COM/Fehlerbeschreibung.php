<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Fehlerbeschreibung
{
    public function __construct(
        public ?string $beschreibung1,
        public ?string $beschreibung2,
        public ?string $beschreibung3,
        public ?string $beschreibung4,
        public ?string $beschreibung5
    ) {
    }
}
