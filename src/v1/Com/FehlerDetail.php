<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\FehlerCode;

class FehlerDetail
{
    public function __construct(
        readonly ?FehlerCode $code = null,
        readonly ?FehlerUrsache $ursache = null,
        readonly ?Beschreibung $beschreibung = null,
    ) {
    }
}
