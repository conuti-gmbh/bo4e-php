<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class FehlerUrsache
{
    public function __construct(
        public ?string $dokument,
        public ?string $nachricht,
        public ?string $transaktion,
        public ?Gruppe $gruppe,
        public ?string $segment,
        public ?Beschreibung $beschreibung,
    ) {
    }
}
