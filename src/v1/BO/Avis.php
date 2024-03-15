<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Avisposition;
use Conuti\BO4E\v1\COM\Betrag;
use Conuti\BO4E\v1\Enum\AvisTyp;
use Conuti\BO4E\v1\Enum\BOTyp;

class Avis
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::AVIS,
        readonly string $versionStruktur = "1",
        readonly ?string $avisNummer = null,
        readonly ?AvisTyp $avisTyp = null,
        readonly ?Betrag $zuZahlen = null,
        /** @var Avisposition[] */
        readonly array $positionen = [],
    ) {
    }
}
