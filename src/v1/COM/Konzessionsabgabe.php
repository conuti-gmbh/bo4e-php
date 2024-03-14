<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\AbgabeArt;

class Konzessionsabgabe
{
    public function __construct(
        readonly ?AbgabeArt $satz = null,
        readonly ?float $kosten = null,
        readonly ?string $kategorie = null,
    ) {
    }
}
