<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\MarktlokationsTyp;

class MarktlokationsReferenz
{
    public function __construct(
        readonly ?string $marktlokationsId = null,
        readonly ?MarktlokationsTyp $typ = null,
    ) {
    }
}
