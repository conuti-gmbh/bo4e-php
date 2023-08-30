<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Rechenschritt
{
    public function __construct(
        public ?int $rechenschrittBestandteilId,
        public ?int $referenzRechenschrittId,
        public ?string $operation,
        public int|float|null $verlustfaktorTrafo,
        public int|float|null $verlustfaktorLeitung,
        public ?string $messlokationsId,
        public ?string $energieflussrichtung
    ) {
    }
}
