<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Fehler;
use Conuti\BO4E\v1\Enum\BerichtStatus;
use Conuti\BO4E\v1\Enum\BOTyp;
use DateTime;

class Statusbericht
{
    public function __construct(
        readonly BOTyp $boTyp,
        readonly string $versionStruktur,
        readonly ?BerichtStatus $status,
        readonly ?string $pruefgegenstand,
        readonly ?DateTime $datumPruefung,
        readonly ?Fehler $fehler,
    ) {
    }
}
