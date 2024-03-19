<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class Katasteradresse
{
    public function __construct(
        readonly ?string $gemarkung_flur = null,
        readonly ?string $flurstueck = null,
    ) {
    }
}
