<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Com\Rufnummer;

class Ansprechpartner
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::ANSPRECHPARTNER,
        readonly string $versionStruktur = '1',
        readonly ?string $nachname = null,
        readonly ?string $eMailAdresse = null,
        /** @var Rufnummer[] */
        readonly array $rufnummern = [],
    ) {
    }
}
