<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Begruendung
{
    public function __construct(
        readonly ?string $begruendung1,
        readonly ?string $begruendung2,
        readonly ?string $begruendung3,
        readonly ?string $begruendung4,
        readonly ?string $begruendung5
    ) {
    }
}
