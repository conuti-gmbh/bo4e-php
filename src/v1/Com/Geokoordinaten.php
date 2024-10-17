<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Zone;

class Geokoordinaten
{
    public function __construct(
        readonly ?string $breitengrad = null,
        readonly ?string $laengengrad = null,
        readonly ?string $ostwert = null,
        readonly ?string $nordwert = null,
        readonly ?Zone $zone = null,
        readonly ?string $hochwert = null,
        readonly ?string $rechtswert = null,
    ) {
    }
}
