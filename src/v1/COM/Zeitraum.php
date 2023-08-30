<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Zeitraum
{
    public function __construct(
        public ?string $zeiteinheit,
        public int|float|null $dauer,
        public ?string $startdatum,
        public ?string $enddatum,
        public ?string $einheit,
        public ?string $ableseZeitraum,
        public ?string $abrechnungsZeitraum,
        public ?string $zeitraumText
    ) {
    }
}
