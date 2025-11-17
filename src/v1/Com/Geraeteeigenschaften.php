<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Geraetetyp;
use Conuti\BO4E\v1\Enum\Geraetemerkmal;
use Conuti\BO4E\v1\Enum\Volumenerfassung;
use DateTime;

class Geraeteeigenschaften
{
    public function __construct(
        readonly ?Geraetetyp $geraetetyp = null,
        readonly ?Geraetemerkmal $geraetemerkmal = null,
        readonly ?Volumenerfassung $volumenerfassung = null,
        readonly ?string $serialnummer = null,
        readonly ?DateTime $herstellungsdatum = null,
        readonly ?string $baujahr = null,
        readonly ?DateTime $eichungBis = null,
        readonly ?float $faktor = null,
    ) {
    }
}
