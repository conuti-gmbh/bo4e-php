<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class FehlerUrsache
{
    public function __construct(
        readonly ?string $dokument,
        readonly ?string $nachricht,
        readonly ?string $transaktion,
        readonly ?Gruppe $gruppe,
        readonly ?string $segment,
        readonly ?Beschreibung $beschreibung,
    ) {
    }
}
