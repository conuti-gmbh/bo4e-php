<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class Zeitreihenprodukt
{
    public function __construct(
        readonly ?string $identifikation = null,
        readonly ?float $korrekturfaktor = null,
        readonly ?Verbrauch $energiemenge = null,
        readonly ?Menge $jahresverbrauchsprognose = null,
    ) {
    }
}
