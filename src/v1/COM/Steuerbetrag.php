<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Steuerbetrag
{
    public function __construct(
        readonly ?string $steuerkennzeichen,
        readonly ?float $basiswert,
        readonly ?float $steuerwert,
        readonly ?string $waehrung,
        readonly ?float $basiswertVorausbezahlt,
        readonly ?float $steuerwertVorausbezahhlt
    ) {
    }
}
