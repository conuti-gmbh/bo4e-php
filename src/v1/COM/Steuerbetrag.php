<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Steuerbetrag
{
    public function __construct(
        readonly ?string $steuerkennzeichen,
        readonly int|float|null $basiswert,
        readonly int|float|null $steuerwert,
        readonly ?string $waehrung,
        readonly int|float|null $basiswertVorausbezahlt,
        readonly int|float|null $steuerwertVorausbezahhlt
    ) {
    }
}
