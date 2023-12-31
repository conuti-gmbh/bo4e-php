<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Avisposition;
use Conuti\BO4E\v1\COM\Betrag;
use Conuti\BO4E\v1\Enum\AvisTyp;

class Avis
{
    public function __construct(
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?string $avisNummer,
        readonly ?AvisTyp $avisTyp,
        readonly ?Betrag $zuZahlen,
        /** @var Avisposition[] */
        readonly array $positionen = []
    ) {
    }
}
