<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class Rueckmeldungsposition
{
    public function __construct(
        readonly ?int $positionsnummer = null,
        /** @var ?Abweichung[] */
        readonly ?array $abweichung = null,
    ) {
    }
}
