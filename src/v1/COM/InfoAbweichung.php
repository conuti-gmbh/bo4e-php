<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class InfoAbweichung
{
    public function __construct(
        readonly ?string $abweichung1,
        readonly ?string $abweichung2,
        readonly ?string $abweichung3,
        readonly ?string $abweichung4,
        readonly ?string $abweichung5
    ) {
    }
}
