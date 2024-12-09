<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\MarktlokationsTyp;
use DateTime;

class MarktlokationsTypisierung
{
    public function __construct(
        readonly ?MarktlokationsTyp $typ = null,
        readonly ?DateTime $gueltigAb = null,
        readonly ?DateTime $gueltigBis = null,
    ) {
    }
}
