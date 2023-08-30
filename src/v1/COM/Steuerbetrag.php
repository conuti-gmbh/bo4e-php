<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Steuerbetrag
{
    public function __construct(
        public ?string $steuerkennzeichen,
        public int|float|null $basiswert,
        public int|float|null $steuerwert,
        public ?string $waehrung,
        public int|float|null $basiswertVorausbezahlt,
        public int|float|null $steuerwertVorausbezahhlt
    ) {
    }
}
