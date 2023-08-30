<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\AbgabeArt;

class Konzessionsabgabe
{
    public function __construct(
        public ?AbgabeArt $satz,
        public ?float $kosten,
        public ?string $kategorie
    ) {
    }
}
