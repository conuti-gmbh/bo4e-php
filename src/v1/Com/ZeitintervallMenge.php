<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use DateTime;

class ZeitintervallMenge
{
    public function __construct(
        readonly ?DateTime $verwendungAb = null,
        readonly ?DateTime $verwendungBis = null,
        readonly ?Menge $menge = null,
    ) {
    }
}
