<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class InfoAbweichung
{
    public function __construct(
        readonly ?string $abweichung1 = null,
        readonly ?string $abweichung2 = null,
        readonly ?string $abweichung3 = null,
        readonly ?string $abweichung4 = null,
        readonly ?string $abweichung5 = null,
    ) {
    }
}
