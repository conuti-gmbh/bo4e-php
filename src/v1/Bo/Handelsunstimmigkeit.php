<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Handelsunstimmigkeitstyp;
use Conuti\BO4E\v1\Com\Handelsunstimmigkeitsbegruendung;
use Conuti\BO4E\v1\Com\Betrag;

class Handelsunstimmigkeit
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::HANDELSUNSTIMMIGKEIT,
        readonly string $versionStruktur = '1',
        readonly ?string $nummer = null,
        readonly ?Handelsunstimmigkeitstyp $typ = null,
        readonly ?Handelsunstimmigkeitsbegruendung $begruendung = null,
        readonly ?Betrag $zuZahlen = null,
    ) {
    }
}
