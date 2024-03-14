<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Zeiteinheit;

class Zeitraum
{
    public function __construct(
        readonly ?Zeiteinheit $zeiteinheit = null,
        readonly ?int $dauer = null,
        readonly ?string $startdatum = null,
        readonly ?string $enddatum = null,
        readonly ?Zeiteinheit $einheit = null,
        readonly ?string $ableseZeitraum = null,
        readonly ?string $abrechnungsZeitraum = null,
        readonly ?string $zeitraumText = null,
    ) {
    }
}
