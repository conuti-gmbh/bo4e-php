<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class Steuerbetrag
{
    public function __construct(
        readonly ?string $steuerkennzeichen = null,
        readonly ?float $basiswert = null,
        readonly ?float $steuerwert = null,
        readonly ?string $waehrung = null,
        readonly ?float $basiswertVorausbezahlt = null,
        readonly ?float $steuerwertVorausbezahhlt = null,
    ) {
    }
}
