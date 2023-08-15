<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Zeiteinheit;

class Zeitraum
{
    public function __construct(
        readonly ?Zeiteinheit $zeiteinheit,
        readonly int|float|null $dauer,
        readonly ?string $startdatum,
        readonly ?string $enddatum,
        readonly ?Zeiteinheit $einheit,
        readonly ?string $ableseZeitraum,
        readonly ?string $abrechnungsZeitraum,
        readonly ?string $zeitraumText
    ) {
    }
}
