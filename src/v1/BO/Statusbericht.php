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
        public BOTyp $boTyp,
        public string $versionStruktur,
        public ?BerichtStatus $status,
        public ?string $pruefgegenstand,
        public ?DateTime $datumPruefung,
        public ?Fehler $fehler,
    ) {
    }
}
