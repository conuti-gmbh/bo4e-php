<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Betrag;
use Conuti\BO4E\v1\COM\Handelsunstimmigkeitsbegruendung;
use Conuti\BO4E\v1\Enum\Handelsunstimmigkeitstyp;

class Handelsunstimmigkeit
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?string $nummer,
        public ?Handelsunstimmigkeitstyp $typ,
        public ?Handelsunstimmigkeitsbegruendung $begruendung,
        public ?Betrag $zuZahlen
    ) {
    }
}
