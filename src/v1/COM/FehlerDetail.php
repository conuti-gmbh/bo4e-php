<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\FehlerCode;

class FehlerDetail
{
    public function __construct(
        public ?FehlerCode $code,
        public ?FehlerUrsache $ursache,
        public ?Beschreibung $beschreibung,
    ) {
    }
}
