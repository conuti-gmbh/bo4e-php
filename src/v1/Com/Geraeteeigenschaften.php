<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Geraetetyp;
use Conuti\BO4E\v1\Enum\Geraetemerkmal;

class Geraeteeigenschaften
{
    public function __construct(
        readonly ?Geraetetyp $geraetetyp = null,
        readonly ?Geraetemerkmal $geraetemerkmal = null,
        readonly ?float $faktor = null,
    ) {
    }
}
