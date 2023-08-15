<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Katalogverweis
{
    public function __construct(
        readonly ?string $katalognummer,
        readonly ?string $zeilennummer,
        readonly ?string $versionsnummer,
    ) {
    }
}
