<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\ArithmetischeOperation;
use Conuti\BO4E\v1\Enum\Energierichtung;

class Rechenschritt
{
    public function __construct(
        public ?int $rechenschrittBestandteilId,
        public ?int $referenzRechenschrittId,
        public ?ArithmetischeOperation $operation,
        public int|float|null $verlustfaktorTrafo,
        public int|float|null $verlustfaktorLeitung,
        public ?string $messlokationsId,
        public ?Energierichtung $energieflussrichtung
    ) {
    }
}
