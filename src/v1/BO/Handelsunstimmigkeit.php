<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Betrag;
use Conuti\BO4E\v1\COM\Handelsunstimmigkeitsbegruendung;
use Conuti\BO4E\v1\Enum\Handelsunstimmigkeitstyp;

class Handelsunstimmigkeit
{
    public function __construct(
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?string $nummer,
        readonly ?Handelsunstimmigkeitstyp $typ,
        readonly ?Handelsunstimmigkeitsbegruendung $begruendung,
        readonly ?Betrag $zuZahlen
    ) {
    }
}
