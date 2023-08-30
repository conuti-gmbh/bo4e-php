<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Zeiteinheit;

class Zeitraum
{
    public function __construct(
        public ?Zeiteinheit $zeiteinheit,
        public int|float|null $dauer,
        public ?string $startdatum,
        public ?string $enddatum,
        public ?Zeiteinheit $einheit,
        public ?string $ableseZeitraum,
        public ?string $abrechnungsZeitraum,
        public ?string $zeitraumText
    ) {
    }
}
