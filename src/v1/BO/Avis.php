<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Avisposition;
use Conuti\BO4E\v1\COM\Betrag;

class Avis
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?string $avisNummer,
        public ?string $avisTyp,
        public ?Betrag $zuZahlen,
        /** @var Avisposition[] */
        public array $positionen = []
    ) {
    }
}
