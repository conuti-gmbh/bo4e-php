<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class FehlerUrsache
{
    public function __construct(
        readonly ?string $dokument = null,
        readonly ?string $nachricht = null,
        readonly ?string $transaktion = null,
        readonly ?Gruppe $gruppe = null,
        readonly ?string $segment = null,
        readonly ?Beschreibung $beschreibung = null,
    ) {
    }
}
