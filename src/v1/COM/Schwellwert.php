<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Schwellwert
{
    public function __construct(
        readonly ?float $obererSchwellwert = null,
        readonly ?float $untererSchwellwert = null,
        readonly ?string $konfigurationsprodukt = null,
    ) {
    }
}
