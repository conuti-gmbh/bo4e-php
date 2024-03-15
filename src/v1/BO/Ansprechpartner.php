<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Rufnummer;
use Conuti\BO4E\v1\Enum\BOTyp;

class Ansprechpartner
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::ANSPRECHPARTNER,
        readonly string $versionStruktur = "1",
        readonly ?string $nachname = null,
        readonly ?string $eMailAdresse = null,
        /** @var Rufnummer[] */
        readonly array $rufnummern = [],
    ) {
    }
}
