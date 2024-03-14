<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Katalogverweis
{
    public function __construct(
        readonly ?string $katalognummer = null,
        readonly ?string $zeilennummer = null,
        readonly ?string $versionsnummer = null,
    ) {
    }
}
