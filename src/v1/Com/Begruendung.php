<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class Begruendung
{
    public function __construct(
        readonly ?string $begruendung1 = null,
        readonly ?string $begruendung2 = null,
        readonly ?string $begruendung3 = null,
        readonly ?string $begruendung4 = null,
        readonly ?string $begruendung5 = null,
    ) {
    }
}
