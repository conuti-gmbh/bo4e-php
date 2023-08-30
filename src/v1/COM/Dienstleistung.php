<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Dienstleistung
{
    public function __construct(
        public ?string $dienstleistungstyp,
        public ?string $bezeichnung
    ) {
    }
}
