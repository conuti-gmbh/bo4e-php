<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\NotwendigkeitProduktpaket;
use Conuti\BO4E\v1\Enum\PriorisierungErforderlichesProduktpaket;

class Priorisierung
{
    public function __construct(
        readonly ?NotwendigkeitProduktpaket $notwendigkeitProduktpaket = null,
        readonly ?PriorisierungErforderlichesProduktpaket $priorisierungErforderlichesProduktpaket = null,
    ) {
    }
}
