<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Katalogverweis
{
    public function __construct(
        public ?string $katalognummer,
        public ?string $zeilennummer,
        public ?string $versionsnummer,
    ) {
    }
}
