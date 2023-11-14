<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Inbetriebsetzung;
use Conuti\BO4E\v1\Enum\RessourceWechselmoeglichkeit;

class VerbrauchendeTechnischeRessource
{
    public function __construct(
        readonly ?bool $enwg,
        readonly ?Inbetriebsetzung $inbetriebsetzungsdatum,
        readonly ?RessourceWechselmoeglichkeit $einordnung
    ) {
    }
}
